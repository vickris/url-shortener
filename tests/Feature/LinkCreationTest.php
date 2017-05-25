<?php

use Carbon\Carbon;
use App\Link;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class LinkCreationTest extends TestCase
{
    use DatabaseMigrations;



    public function testCorrectMessageIsReturnedWhenNoValueIsPosted()
    {
        $this->json('POST', '/')
            ->notSeeInDatabase('links', ['new_url' => 1]);
    }


    public function testCorrectMessageForInvalidUrl()
    {
        $this->json('POST', '/', ['url' => 'http://goog$*$*('])
            ->notSeeInDatabase('links', ['new_url' => 1])
            ->seeJson(['url' => ['Not a valid URL']]);
    }


    public function testSuccessfulCretionOfALink()
    {
        $this->json('POST', '/', ['url' => 'google.com'])
            ->seeInDatabase('links', ['new_url' => 1])
            ->assertResponseStatus(201);
    }


    public function testRequestCountWorks()
    {
        $url = ['url' => 'http://google.com'];

        $this->json('POST', '/', $url);
        $this->json('POST', '/', $url);

        $this->seeInDatabase('links', [
            'original_url' => 'http://google.com',
            'request_count' => 2
        ]);
    }


    public function testLastRequestedDateWorks()
    {
        Link::flushEventListeners();

        $link = factory(Link::class)->create([
            'last_requested' => Carbon::now()->subDays(2)
        ]);


        $this->json('POST', '/', ['url' => $link->original_url])
            ->seeInDatabase('links', [
                'original_url' => $link->original_url,
                'last_requested' => Carbon::now()
            ]);
    }
}



