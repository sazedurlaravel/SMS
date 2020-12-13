<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeeCategory;

class FeeCategoryController extends Controller
{
    public function view()
    {
        $data['allData']=FeeCategory::all();
        return view('backend.setup.fee.view-fee-category',$data);
    }

    public function add()
    {
        return view('backend.setup.fee.add-fee-category');
    }

     public function edit($id)
    {
        $data['editData']=FeeCategory::find($id);
        return view('backend.setup.fee.add-fee-category',$data);
    }

     public function store(Request $request)
    {
         $this->validate($request,[
            'name' => 'required|unique:years,name'
            
        ]);

         $year=new FeeCategory();
         $year->name=$request->name;
         $year->save();

         return redirect()->route('fee.category.view')->with('success','FeeCategory Added Successfully !!');
    }

     public function update(Request $request,$id)
    {

         $year=FeeCategory::find($id);
         $year->name=$request->name;
         $year->save();

         return redirect()->route('fee.category.view')->with('success','FeeCategory Updated Successfully !!');
    }
}
