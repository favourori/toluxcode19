<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Category;
use App\Model\SubCategory;
use App\Model\Type;
use App\Model\Subtype;

class AdminController extends Controller
{
    public function dashboard(){
        $user = auth()->user();
        $user_count = User::count();
        $category_count = Category::count();
        $subcategory_count = SubCategory::count();
        $type_count = Type::count();
        $subtype_count = Subtype::count();

        return view('admin.dashboard', 
            compact('user_count', 'category_count', 'subcategory_count', 'type_count', 'subtype_count'));
    }
}
