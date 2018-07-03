<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ReportAdvert;

class ReportController extends Controller
{
    public function report(Request $request){
        $reports = ReportAdvert::orderBy('created_at', 'asc')->get();
        $reports->load('user','advert');
        return view('admin.advertreport', compact('reports'));
    }
}
