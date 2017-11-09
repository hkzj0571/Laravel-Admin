<?php

namespace App\Services;

use App\Models\Router;
use Cache;

class RoutersService
{
    public $routers;

    public function __construct()
    {
        $this->routers = Cache::remember('routers', 30,
            function() {
                return Router::tops()->with('routers')->get();
            }
        );
    }
}