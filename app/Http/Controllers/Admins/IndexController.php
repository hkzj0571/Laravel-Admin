<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');
    }

    public function clear()
    {
        cache()->clear();
        return succeed();
    }

}
