<?php

use Illuminate\Http\Request;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class UrlIsSanitizedTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHttpIsPrependedToUrls()
    {
        $request = new Request;

        $request->merge([
            'url' => 'google.com'
        ]);

        $middleware = new App\Http\Middleware\UrlSanitizerMiddleware;

        $middleware->handle($request, function ($req) {
            $this->assertEquals('http://google.com', $req->url);
        });
    }


    public function testHttpIsNotAppendedIfAlreadyExists()
    {
        $urls = [
            'http://google.com',
            'https://google.com',
            'ftp://google.com'
        ];

        $request = new Request;
        $middleware = new App\Http\Middleware\UrlSanitizerMiddleware;

        foreach ($urls as $url) {
            $request->merge([
                'url' => $url
            ]);

            $middleware->handle($request, function ($req) use ($url) {
                $this->assertEquals($url, $req->url);
            });
        }
    }
}



