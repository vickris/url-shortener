<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Link;
use Cache;

class LinksController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'required|url'
        ], [
            'url.required' => 'Please enter a URL',
            'url.url' => 'Not a valid URL'
        ]);

        $link = Link::firstOrNew([
            'original_url' => $request->url
        ]);


        if (!$link->exists) {
            $link->save();
        }

        $link->increment('request_count');
        $link->touchTimestamp('last_requested');

        return response()->json([
            'original_url' => $link->original_url,
            'new_url' => $link->new_url,
        ], 201);

    }


    public function show($code_id)
    {
        $link = Cache::rememberForever("link.{$code_id}", function () use ($code_id)
        {
            return Link::byCode($code_id);
        });

        if (!$link) {
            return response(null, 404);
        }

        $link->increment('use_count');

        $link->touchTimestamp('last_used');

        return response()->json([
            'original_url' => $link->original_url,
            'shortened_url' => $link->shortenedUrl(),
        ], 200);
    }
}
