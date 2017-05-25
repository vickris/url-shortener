<?php

namespace App;

use Carbon\Carbon;
use App\Helpers\Math;
use Illuminate\Database\Eloquent\Model;
use App\Exceptions\NullIdException;

class Link extends Model
{
    protected $fillable = ['original_url', 'new_url', 'request_count', 'use_count', 'last_used', 'last_requested'];

    protected $dates = ['last_used', 'last_requested'];

    public function getCode()
    {

        if (!$this->id) {
            throw new NullIdException;
        }

        return (new Math)->encode($this->id);
    }

    public static function byCode($new_url)
    {
        return static::where('new_url', $new_url)->first();
    }

    public function shortenedUrl()
    {
        return env('CLIENT_URL').'/'.$this->new_url;
    }


    public function touchTimestamp($column)
    {
        $this->{$column} = Carbon::now();
        $this->save();
    }

}
