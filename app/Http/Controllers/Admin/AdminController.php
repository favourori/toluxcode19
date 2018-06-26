<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function dashboard(){
        $user = auth()->user();
        return view('admin.dashboard');
    }
}
