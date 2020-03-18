<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $profile = auth()->user()->profile;
        return view('user.profile', compact('profile'));
    }
}
