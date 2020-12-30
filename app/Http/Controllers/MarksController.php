<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssignStudent;
use App\StudentClass;
use App\StudentMark;
use App\Group;
use App\Shift;
use App\FeeCategory;
use App\User;
use App\DiscountStudent;
use App\Year;
use App\ExamType;
use DB;
use PDF;

class MarksController extends Controller
{
    public function add()
    {
    	$data['classes'] = StudentClass::all();
    	$data['exams'] = ExamType::all();
    	$data['years'] = Year::orderBy('id','desc')->get();

    	return view('backend.marks.marks-entry',$data);
    }

     public function store(Request $request)
    {
    	
    	$studentCount = $request->student_id;

    	if ($studentCount) {
    		for ($i=0; $i <count($studentCount); $i++) { 
    			$data = new StudentMark();
    			$data->year_id = $request->year_id; 
    			$data->class_id = $request->class_id; 
    			$data->assign_subject_id = $request->assign_subject_id; 
    			$data->exam_type_id = $request->exam_type_id; 
    			$data->exam_type_id = $request->exam_type_id; 
    			$data->student_id = $request->student_id[$i];
    			$data->id_no = $request->id_no[$i];
    			$data->marks = $request->marks[$i];
    			$data->save();
    		}
    	}

    	return back()->with('success','Marks Inserted successfully !');

   }
}
