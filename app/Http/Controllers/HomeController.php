<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Advert;
// use App\Model\Category;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adverts = Advert::all();
        $adverts->load('image');
        $categories = Category::all();

        return view('index', compact('adverts', 'categories'));
    }

    public function categories()
    {
        $adverts = Advert::all();
        $adverts->load('image');
        $categories = Category::all();

        $categories->load('advert.subcategory');
        // dd($categories);
        return view('categories', compact('adverts', 'categories'));
    }
}
