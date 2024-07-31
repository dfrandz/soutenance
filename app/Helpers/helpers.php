<?php

use Carbon\Carbon;

if (!function_exists('relative_time')) {
    function relative_time($dateString)
    {
        return Carbon::parse($dateString)->diffForHumans();
    }
}