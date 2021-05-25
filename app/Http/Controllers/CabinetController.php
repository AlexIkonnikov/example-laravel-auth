<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function show(Request $request)
    {
        $user = Auth::user();
        $posts = $user->posts;
        return view('cabinet', compact('posts'));
    }
}
