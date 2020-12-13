<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentClass;

class ClassController extends Controller
{
    public function view()
    {
    	$data['allData']=StudentClass::all();
    	return view('backend.setup.class.view-class',$data);
    }

    public function add()
    {
    	return view('backend.setup.class.add-class');
    }

     public function edit($id)
    {
    	$data['editData']=StudentClass::find($id);
    	return view('backend.setup.class.add-class',$data);
    }

     public function store(Request $request)
    {
    	 $this->validate($request,[
            'name' => 'required|unique:student_classes,name'
            
        ]);

    	 $class=new StudentClass();
    	 $class->name=$request->name;
    	 $class->save();

    	 return redirect()->route('setups.classes.view')->with('success','Class Added Successfully !!');
    }

     public function update(Request $request,$id)
    {
         

         $class=StudentClass::find($id);
         $class->name=$request->name;
         $class->save();

         return redirect()->route('setups.classes.view')->with('success','Class Updated Successfully !!');
    }
}
