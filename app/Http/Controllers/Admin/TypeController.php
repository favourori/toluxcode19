<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Validator;
use App\Model\Type;
use App\Model\Subtype;
use App\Model\SubCategory;

class TypeController extends ApiController
{
    
    public function Type(){
        $types = Type::all();
        $subcategories = SubCategory::all();
        $form_types = $this->getEnumValues('types', 'form_type');
       
        return view('admin.type', compact('types', 'form_types','subcategories'));
    }

    public function subType(){
        $types = Type::all();
        $subtypes = Subtype::all();
        $subtypes->load('type');
        return view('admin.subtype', compact('subtypes', 'types'));
    }

    public function deleteType(Request $request, $id){
        $type = Type::find($id);
        if($type->delete()){
            return $this->actionSuccess('Type has been deleted');
        }else{
            return back()->with('error', 'Type delete failed');
        }
    }

    public function deleteSubType(Request $request, $id){
        $subtype = Subtype::find($id);
        if($subtype->delete()){
            return $this->actionSuccess('SubType has been deleted');
        }else{
            return back()->with('error', 'SubType delete failed');
        }
    }

    public function createType(Request $request){
        $this->validator($request->all())->validate();
        $type = new Type;
        $type->name = $request->name;
        $type->form_type = $request->form_type;
        $type->subcategory = $request->subcategory;

        if($type->save()){
            return back()->with('success', 'Type Created Successfully');
        }else{
            return back()->with('error', 'Type Creation failed');
        }
    }

    public function editType(Request $request, $type_id){
        $this->validator($request->all())->validate();
        $type = Type::find($type_id);
        $type->name = $request->name;
        $type->form_type = $request->form_type;
        $type->subcategory = $request->subcategory;

        if($type->save()){
            return back()->with('success', 'Type Edited Successfully');
        }else{
            return back()->with('error', 'Type Edit failed');
        }
    }

    public function createSubType(Request $request){
        $this->validateSubType($request->all())->validate();
        $subtype = new SubType;
        $subtype->name = $request->name;
        $subtype->type_id = $request->type_id;

        if($subtype->save()){
            return back()->with('success', 'SubType Created Successfully');
        }else{
            return back()->with('error', 'SubType Creation failed');
        }
    }

    public function editSubType(Request $request, $subtype_id){
        $this->validateSubType($request->all())->validate();
        $subtype = SubType::find($subtype_id);
        $subtype->name = $request->name;
        $subtype->type_id = $request->type_id;

        if($subtype->save()){
            return back()->with('success', 'SubType Edited Successfully');
        }else{
            return back()->with('error', 'SubType Edit failed');
        }
    }

    protected function processImage($request){
        $filename = null;

        if($request->has('image')){
            $image = $request->file('image'); 
            $path = public_path('/img/Type/');
            $filename = '/img/Type/'.time().".".$image->getClientOriginalExtension();
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
            'form_type' => 'required|string',
            
            ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateSubType(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string',
            'type_id' => 'required|numeric',
        ],
    
    [
        'type_id.numeric' => 'Select a Type'
    ]);
    }

    

}
