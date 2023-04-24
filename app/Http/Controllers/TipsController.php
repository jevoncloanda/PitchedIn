<?php

namespace App\Http\Controllers;

use App\Models\Tips;
use Illuminate\Http\Request;

class TipsController extends Controller
{
    public function getCreateTips()
    {
        return view('create.createTips');
    }

    public function createTips(Request $request)
    {
        $image = NULL;
        if($request->file('image'))
        {
            $image = $request->file('image')->store('tips-images');
        }

        Tips::create([
            'caption' => $request->caption,
            'tag' => $request->tag,
            'image' => $image
        ]);
        return redirect(route('getLandingPage'));
    }
}
