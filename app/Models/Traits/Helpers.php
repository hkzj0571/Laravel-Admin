<?php

namespace App\Models\Traits;

use Carbon\Carbon;

trait Helpers
{

    /**
     * @param $date
     * @return string|static
     */
    public function hommization($date)
    {
        return Carbon::now() > Carbon::parse($date)->addDays(10)
            ? Carbon::parse($date)
            : Carbon::parse($date)->diffForHumans();
    }
}