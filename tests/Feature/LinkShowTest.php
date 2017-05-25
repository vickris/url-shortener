<?php

use App\Link;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class LinkShowTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */

    public function testShortenedUrlIsReturned()
    {
        $link = factory(Link::class)->create();

        $this->json('GET', '/'.$link->new_url)
            ->seeJson([
                'original_url' => $link->original_url,
                'shortened_url' => $link->shortenedUrl(),
            ])
            ->assertResponseStatus(200);
    }


    public function test404isReturnedForNonExistentCodes()
    {
        $this->json('GET', '/sjsjjjs')
            ->assertResponseStatus(404);
    }

    public function testUsedCountWorks()
    {
        $link = factory(Link::class)->create();

        $this->json('GET', '/'.$link->new_url);
        $this->json('GET', '/'.$link->new_url);
        $this->json('GET', '/'.$link->new_url);

        $this->seeInDatabase('links', [
            'original_url' => $link->original_url
        ]);
    }

    public function testLastUsedDateWorks()
    {
        Link::flushEventListeners();

        $link = factory(Link::class)->create([
            'last_used' => Carbon::now()->subDays(2),
            'new_url' => 1
        ]);

        $this->json('GET', '/'.$link->new_url)
            ->seeInDatabase('links', [
                'original_url' => $link->original_url,
                'last_used' => Carbon::now()
            ]);
    }

}



