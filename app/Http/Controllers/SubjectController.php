<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    public function view()
    {
        $data['allData']=Subject::all();
        return view('backend.setup.subject.view-subject',$data);
    }

    public function add()
    {
        return view('backend.setup.subject.add-subject');
    }

     public function edit($id)
    {
        $data['editData']=Subject::find($id);
        return view('backend.setup.subject.add-subject',$data);
    }

     public function store(Request $request)
    {
         $this->validate($request,[
            'name' => 'required|unique:subjects,name'
            
        ]);

         $Subject=new Subject();
         $Subject->name=$request->name;
         $Subject->save();

         return redirect()->route('setups.subject.view')->with('success','Subject Added Successfully !!');
    }

     public function update(Request $request,$id)
    {
    		 
         $this->validate($request,[
            'name' => 'required|unique:subjects,name'
            
        ]);

         $Subject=Subject::find($id);
         $Subject->name=$request->name;
         $Subject->save();

         return redirect()->route('setups.subject.view')->with('success','Subject Added Successfully !!');
    }
}
