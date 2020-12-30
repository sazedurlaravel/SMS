<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExamType;

class ExamTypeController extends Controller
{
    public function view()
    {
        $data['allData']=ExamType::all();
        return view('backend.setup.exam.view-exam-type',$data);
    }

    public function add()
    {
        return view('backend.setup.exam.add-exam-type');
    }

     public function edit($id)
    {
        $data['editData']=ExamType::find($id);
        return view('backend.setup.exam.add-exam-type',$data);
    }

     public function store(Request $request)
    {
         $this->validate($request,[
            'name' => 'required|unique:exam_types,name'
            
        ]);

         $examType=new ExamType();
         $examType->name=$request->name;
         $examType->save();

         return redirect()->route('exam.type.view')->with('success','ExamType Added Successfully !!');
    }

     public function update(Request $request,$id)
    {
         $examType=ExamType::find($id);
         $examType=new ExamType();
         $examType->name=$request->name;
         $examType->save();

         return redirect()->route('exam.type.view')->with('success','ExamType Updated Successfully !!');
    }
}
