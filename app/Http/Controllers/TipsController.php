<?php

namespace App\Http\Controllers;

use App\Models\Tips;
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
        return redirect(route('getLandingPage'));
    }
}
