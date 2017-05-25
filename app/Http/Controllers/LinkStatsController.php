<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use Cache;

class LinkStatsController extends Controller
{
    public function show($code_id)
    {
        $link = Cache::remember("stats.{$code_id}", 10, function () use ($code_id)
        {
            return Link::byCode($code_id);
        });


        return response()->json([
            'original_url' => $link->original_url,
            'new_url' => $link->new_url,
            'shortened_url' => $link->shortenedUrl(),
            'use_count' => (int) $link->use_count,
            'request_count' => (int) $link->request_count,
            'last_requested' => $link->last_requested->toDateTimeString(),
            'last_used' => $link->last_used ? $link->last_used->toDateTimeString() : null,
        ], 200);
    }
}
