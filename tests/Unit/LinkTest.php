<?php


use App\Link;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\Exceptions\NullIdException;

class LinkTest extends TestCase
{
    use DatabaseMigrations;


    public function testCorrectIdsAreAssignedToLinks()
    {
        $mappings = [
            1 => 1
        ];

        $link = new Link;

        foreach ($mappings as $key => $value) {
            $link->id = $key;
            $this->assertEquals($link->getCode(), $value);
        }
    }


    public function testExceptionIsThrownForNullIds()
    {
        $this->expectException(NullIdException::class);

        $link = new Link;
        $link->getCode();
    }

    public function testShortenedUrlMethodWorks()
    {
        Link::flushEventListeners();
        $link = factory(Link::class)->create(['new_url' => 'abc']);

        $this->assertEquals($link->shortenedUrl(), env('CLIENT_URL').'/abc');
    }
}



