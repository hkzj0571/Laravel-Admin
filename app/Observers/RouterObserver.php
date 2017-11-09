<?php

namespace App\Observers;

use App\Exceptions\RouteNotFoundException;
use Route;

class RouterObserver
{
    public function creating($router)
    {
        if ($router->slug && !Route::has($router->slug)) {
            throw new RouteNotFoundException('this route is not found!');
        }
    }
}