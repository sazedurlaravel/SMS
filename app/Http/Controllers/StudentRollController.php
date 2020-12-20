<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssignStudent;
use App\StudentClass;
use App\Group;
use App\Shift;
use App\FeeCategory;
use App\User;
use App\DiscountStudent;
use App\Year;
use DB;
use PDF;

class StudentRollController extends Controller
{
    public function view(Request $request)
    {
    	$data['classes'] = StudentClass::all();
    	$data['years'] = Year::orderBy('id','desc')->get();
    	
    	return view('backend.student.student_roll.view-roll-generate',$data);
    }

    public function getStudent(Request $request)
    {
    	$allData = AssignStudent::with(['student'])->where('year_id',$request->year_id)->where('class_id',$request->class_id)->get();
    	return response()->json($allData);
    }

    public function rollStore(Request $request)
    {
    	
    	$year_id = $request->year_id;
    	$class_id = $request->class_id;
    	if ($request->student_id !=null) {
    		for ($i=0; $i < count($request->student_id); $i++) { 
    			$rollData = AssignStudent::where('year_id',$year_id)->where('class_id',$class_id)->where('student_id',$request->student_id[$i])->update(['roll'=>$request->roll[$i]]);
    		}
    	}else{
    			return back()->with('error','Sorry No Student Found');
    		}

    	return redirect()->route('students.roll.view')->with('success','Roll Generate Successfully !!');

    }
}
