<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Designation;

class DesignationController extends Controller
{
    public function view()
    {
    	$data['allData']=Designation::all();
    	return view('backend.setup.designation.view-designation',$data);
    }

    public function add()
    {
    	return view('backend.setup.designation.add-designation');
    }

     public function edit($id)
    {
    	$data['editData']=Designation::find($id);
    	return view('backend.setup.designation.add-designation',$data);
    }

     public function store(Request $request)
    {
    	 $this->validate($request,[
            'name' => 'required|unique:designations,name'
            
        ]);

    	 $class=new Designation();
    	 $class->name=$request->name;
    	 $class->save();

    	 return redirect()->route('setups.designation.view')->with('success','Designation Added Successfully !!');
    }

     public function update(Request $request,$id)
    {
         

         $class=Designation::find($id);
         $class->name=$request->name;
         $class->save();

         return redirect()->route('setups.designation.view')->with('success','Designation Updated Successfully !!');
    }
}
