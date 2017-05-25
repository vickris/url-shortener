<?php

use App\Link;
use Illuminate\Http\Request;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class LinkStatsTest extends TestCase
{
    use DatabaseMigrations;


    public function testStatsAreReturnedForALink()
    {
        $link = factory(Link::class)->create(
        [
            'request_count' => 4,
            'use_count' => 3
        ]);


        $this->json('GET', '/stats/'.$link->new_url)
            ->seeJson($this->expectedJson($link))
            ->assertResponseStatus(200);
    }


    protected function expectedJson(Link $link)
    {
        return [
            'original_url' => $link->original_url,
            'new_url' => $link->new_url,
            'shortened_url' => $link->shortenedUrl(),
            'use_count' => $link->use_count,
            'request_count' => $link->request_count,
            'last_requested' => $link->last_requested->toDateTimeString(),
            'last_used' => $link->last_used ? $link->last_used->toDateTimeString() : null,
        ];
    }
}



