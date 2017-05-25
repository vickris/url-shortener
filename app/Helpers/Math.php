<?php


namespace App\Helpers;

class Math
{
    private static $base = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public static function encode($value, $b = 62)
    {
            $r = $value  % $b;
            $result = static::$base[$r];
            $q = floor($value / $b);
            while ($q)
            {
                    $r = $q % $b;
                    $q = floor($q / $b);
                    $result = static::$base[$r].$result;
            }
            return $result;
    }

}
