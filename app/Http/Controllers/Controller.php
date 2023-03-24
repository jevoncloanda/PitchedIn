<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getLandingPage()
    {
        return view('landingpage');
    }

    public function getRegisterPage()
    {
        return view('signup');
    }
    public function getLoginPage()
    {
        return view('login');
    }
}
