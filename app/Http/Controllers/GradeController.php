<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GradePoint;

class GradeController extends Controller
{
 	public function view()
 	{
 		$data['allData'] = GradePoint::all();
 		return view('backend.grade.grade-view',$data);
 	} 

 	public function add()
 	{
 		return view('backend.grade.grade-add');
 	}

 	public function store(Request $request)
 	{
 		$grade = new GradePoint();
 		$grade->grade_name =$request->grade_name;
 		$grade->start_marks =$request->start_marks;
 		$grade->end_marks =$request->end_marks;
 		$grade->grade_point =$request->grade_point;
 		$grade->save();

 		return redirect()->route('grade.view')->with('success','Grade Point Added Successfully 1!');
 	}
}
