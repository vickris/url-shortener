<?php

use App\Http\Middleware\CorsMiddleware;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class CorsMiddlewareTest extends TestCase
{
    use DatabaseMigrations;

    public function testCorrectHeadersAreSet()
    {
        $request = Request::create('/', 'POST');

        $response = new Response;

        $middleware = new CorsMiddleware;

        $response = $middleware->handle($request, function () use ($response)
        {
            return $response;
        });

        $this->assertEquals($response->headers->get('Access-Control-Allow-Origin'), '*');
        $this->assertEquals($response->headers->get('Access-Control-Allow-Methods'), 'HEAD, GET, PUT, PATCH, POST');
        $this->assertEquals($response->headers->get('Access-Control-Allow-Headers'), 'Content-Type');

    }


    public function testPreflightRequestIsHandled()
    {
        $request = Request::create('/', 'OPTIONS');

        $middleware = new CorsMiddleware;

        $response = $middleware->handle($request, function () {});

        $this->assertEquals($response->headers->get('Access-Control-Allow-Origin'), '*');
        $this->assertEquals($response->headers->get('Access-Control-Allow-Methods'), 'HEAD, GET, PUT, PATCH, POST');
        $this->assertEquals($response->headers->get('Access-Control-Allow-Headers'), 'Content-Type');
    }

}



