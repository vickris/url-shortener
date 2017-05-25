<?php

namespace App\Observers;

use App\Link;
use Carbon\Carbon;

class LinkObserver
{
    public function created(Link $link)
    {
        $link->update([
            'new_url' => $link->getCode(),
            'last_requested' => Carbon::now()
        ]);
    }
}
