<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Validator;
use App\Model\Category;
use App\Model\SubCategory;

class CategoryController extends ApiController
{
    
    public function category(){
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }

    public function subcategory(){
        $categories = Category::all();
        $categories->load('subcategory');
        return view('admin.subcategory', compact('categories'));
    }

    public function deleteCategory(Request $request, $id){
        $category = Category::find($id);
        if($category->delete()){
            return $this->actionSuccess('Category has been deleted');
        }else{
            return back()->with('error', 'Category delete failed');
        }
    }

    public function deleteSubCategory(Request $request, $id){
        $subcategory = SubCategory::find($id);
        if($subcategory->delete()){
            return $this->actionSuccess('SubCategory has been deleted');
        }else{
            return back()->with('error', 'SubCategory delete failed');
        }
    }

    public function createCategory(Request $request){
        $this->validator($request->all())->validate();
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $this->processImage($request);

        if($category->save()){
            return back()->with('success', 'Category Created Successfully');
        }else{
            return back()->with('error', 'Category Creation failed');
        }
    }

    public function createSubCategory(Request $request){
        $this->validateSubCategory($request->all())->validate();
        $subcategory = new SubCategory;
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;

        if($subcategory->save()){
            return back()->with('success', 'SubCategory Created Successfully');
        }else{
            return back()->with('error', 'SubCategory Creation failed');
        }
    }

    protected function processImage($request){
        $filename = null;

        if($request->has('image')){
            $image = $request->file('image'); 
            $path = public_path('/img/category/');
            $filename = '/img/category/'.time().".".$image->getClientOriginalExtension();
            $image->move($path,$filename);
        }
        return $filename;
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'image|max:1024'
            ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateSubCategory(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string',
            'category_id' => 'required|numeric',
        ],
    
    [
        'category_id.numeric' => 'Select a category'
    ]);
    }

}
