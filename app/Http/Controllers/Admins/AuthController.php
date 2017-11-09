<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\ValidatorException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $needs = $this->validator('admins.users.login');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        return auth()->attempt($needs, true)
            ? succeed('Welcome back!')
            : failed('This password is wrong!');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.auth.login');
    }
}
