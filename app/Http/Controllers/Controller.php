<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getLandingPage()
    {
        return view('landingpage');
    }

    public function getRegisterPage(Request $request)
    {

        $email = NULL;
        if($request->email)
        {
            $email = $request->email;
        }

        return view('signup', compact('email'));
    }
    public function getLoginPage()
    {
        return view('login');
    }
}
