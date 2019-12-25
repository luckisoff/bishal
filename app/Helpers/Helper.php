<?php
namespace App\Helpers;

class Helper
{
    public static function wish()
    {
        $hour=now()->format("H");
        return ($hour<12)?'Morning':($hour<16?'Afternoon':'Evening');
    }
}
