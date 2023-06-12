<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function getProfile($id)
    {
        $users = User::all();
        $profile = User::find($id);
        return view('profile', compact('users', 'profile'));
    }

    public function updateAbout(Request $request, $id)
    {
        $user = User::find($id);

        $user->update([
            'about' => $request->about
        ]);
        return redirect(route('getProfile', ['id' => $id]));
    }

    public function getPostActivity($id)
    {
        $profile = User::find($id);
        return view('postactivity', compact('profile'));
    }

    public function getActivity($id)
    {
        $profile = User::find($id);
        return view('activity', compact('profile'));
    }

    public function getSavedPosts($id)
    {
        $profile = User::find($id);
        return view('savedposts', compact('profile'));
    }
}
