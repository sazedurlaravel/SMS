<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssignSubject;
use App\Subject;
use App\StudentClass;


class AssignSubjectController extends Controller
{
    public function view()
    {
    	$data['allData']=AssignSubject::select('class_id')->groupBy('class_id')->get();
    	return view('backend.setup.subject.assign_sub.view-assign-subject',$data);
    }

    public function add()
    {
        $data['subjects']=Subject::all();
        $data['classes']=StudentClass::all();
    	return view('backend.setup.subject.assign_sub.add-assign-subject',$data);
    }

    public function edit($class_id)
    {
    	$data['subjects']=Subject::all();
        $data['classes']=StudentClass::all();
    	$data['editData']=AssignSubject::where('class_id',$class_id)->get();
    	return view('backend.setup.subject.assign_sub.edit-assign-subject',$data);
    }

    public function store(Request $request)
    {
    	
       $subjectCount = $request->subject_id;

       if ($subjectCount != NULL) {
       	
           for ($i = 0; $i < count($subjectCount); $i++) {
            $assign_sub=new AssignSubject();
            $assign_sub->class_id=$request->class_id;
            $assign_sub->subject_id=$request->subject_id[$i];
            $assign_sub->full_mark=$request->full_mark[$i];
            $assign_sub->pass_mark=$request->pass_mark[$i];
            $assign_sub->subjective_mark=$request->subjective_mark[$i];
            $assign_sub->save();
        }
       }

        return redirect()->route('assign.subject.view')->with('success','Assign Subject added successfully !!');

       }


    
       public function details($class_id)
       {
        $data['editData']=AssignSubject::where('class_id',$class_id)->orderBy('subject_id','asc')->get();
        return view('backend.setup.subject.assign_sub.view-subject-details',$data);
       }

     public function update(Request $request,$class_id)
    {	
    	AssignSubject::where('class_id',$class_id)->delete();

       $subjectCount = $request->subject_id;

       if ($subjectCount != NULL) {
       	
           for ($i = 0; $i < count($subjectCount); $i++) {
            $assign_sub=new AssignSubject();
            $assign_sub->class_id=$request->class_id;
            $assign_sub->subject_id=$request->subject_id[$i];
            $assign_sub->full_mark=$request->full_mark[$i];
            $assign_sub->pass_mark=$request->pass_mark[$i];
            $assign_sub->subjective_mark=$request->subjective_mark[$i];
            $assign_sub->save();
        }
       }

        return redirect()->route('assign.subject.view')->with('success','Assign Subject Updated successfully !!');

       }

    }

