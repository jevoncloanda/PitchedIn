<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Tips;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TipsController extends Controller
{
    public function getCreateTips()
    {
        $user = Auth::user();
        return view('create.createTips', compact('user'));
    }

    public function createTips(Request $request)
    {
        $user = Auth::user();
        $image = NULL;
        if($request->file('image'))
        {
            $image = $request->file('image')->store('tips-images');
        }

        Tips::create([
            'caption' => $request->caption,
            'tag' => $request->tag,
            'image' => $image,
            'user_id' => $user->id
        ]);
        return redirect(route('getTips'));
    }

    public function getTips()
    {
        $tips = Tips::all();
        $sorted_tips = $tips->sortByDesc('created_at');
        $auth = Auth::user();
        $users = User::all();

        return view('tips', compact('sorted_tips', 'auth', 'users'));
    }

    public function searchTips()
    {
        $search_text = $_GET['query'];
        $auth = Auth::user();
        $users = User::all();
        $tips = Tips::where('caption', 'LIKE', '%' . $search_text . '%')
        ->orWhere('tag', 'LIKE', '%' . $search_text . '%')->get();
        $sorted_tips = $tips->sortByDesc('created_at');

        return view('tips', compact('auth', 'users', 'sorted_tips'));
    }
}
