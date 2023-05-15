<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function getForumPage()
    {
        $user = Auth::user();
        $forums = Forum::all();
        return view('forum', compact('user', 'forums'));
    }

    public function createForum(Request $request)
    {
        $user = Auth::user();
        if($user)
            $user_id = $user->id;
        else
            $user_id = NULL;

        Forum::create([
            'text' => $request->text,
            'user_id' => $user_id
        ]);

        return redirect(route('getForumPage'));
    }
}
