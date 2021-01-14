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
use App\MarkEntry;
use App\Subject;
use DB;
use PDF;

class MarksController extends Controller
{
   //  public function add()
   //  {
   //  	$data['classes'] = StudentClass::all();
   //  	$data['exams'] = ExamType::all();
   //  	$data['years'] = Year::orderBy('id','desc')->get();

   //  	return view('backend.marks.marks-entry',$data);
   //  }

   //   public function store(Request $request)
   //  {
    	
   //  	$studentCount = $request->student_id;

   //  	if ($studentCount) {
   //  		for ($i=0; $i <count($studentCount); $i++) { 
   //  			$data = new StudentMark();
   //  			$data->year_id = $request->year_id; 
   //  			$data->class_id = $request->class_id; 
   //  			$data->assign_subject_id = $request->assign_subject_id; 
   //  			$data->exam_type_id = $request->exam_type_id; 
   //  			$data->exam_type_id = $request->exam_type_id; 
   //  			$data->student_id = $request->student_id[$i];
   //  			$data->id_no = $request->id_no[$i];
   //  			$data->marks = $request->marks[$i];
   //  			$data->save();
   //  		}
   //  	}

   //  	return back()->with('success','Marks Inserted successfully !');

   // }

    public function view()
    {
        $data['years'] =Year::orderBy('id','asc')->get();
        $data['classes'] = StudentClass::orderBy('id','asc')->get();
        $data['exams'] = ExamType::all();
        $data['subjects'] = Subject::all();

       return view('backend.marks.marks-add',$data);
    }

    public function getStudent(Request $req)
    {
        $data['examType'] = $req->exam_type_id;
        $data['subject'] = $req->subject_id;
        $data['year'] = $req->year_id;
        $data['class'] = $req->class_id;
       
       $data['allData'] = AssignStudent::where('year_id',$req->year_id)->where('class_id',$req->class_id)->get();

      $data['exams'] = ExamType::all();
      $data['subjects'] = Subject::all();



       return view('backend.marks.entry-mark',$data);

    }

    public function store(Request $request)
    {
            $studentCount = $request->student_id;

     if ($studentCount) {
         for ($i=0; $i <count($studentCount); $i++) { 
             $data = new MarkEntry();
             $data->student_id = $request->student_id[$i]; 
             $data->id_no = $request->id_no[$i]; 
             $data->class_id = $request->class_id; 
             $data->year_id = $request->year_id; 
             $data->exam_type_id = $request->exam_type_id; 
             $data->subject_id = $request->subject_id; 
             $data->cq_marks = $request->cq_marks[$i];
             $data->mcq_marks = $request->mcq_marks[$i];
             $data->practical_marks = $request->practical_marks[$i];
             $data->class_attendence = $request->class_attendence[$i];
             //calculatins
             $cq_marks =$data->cq_marks = $request->cq_marks[$i];
             $mcq_marks =$data->mcq_marks = $request->mcq_marks[$i];
             $practical_marks = $data->practical_marks = $request->practical_marks[$i];
             $class_attendence = $data->class_attendence = $request->class_attendence[$i];

             $totals =(integer)$cq_marks+(integer)$mcq_marks+(integer)$practical_marks+(integer)$class_attendence;


             $data->total_marks = $totals;
             $data->grade_id = '1';
             $data->save();
         }

         return redirect()->route('marks.data')->with('success','Marks Entry Success !!');
     }


    }

    public function data()
    {
     $data['allData']=MarkEntry::select(['student_id','year_id','class_id','id_no'])->groupBy(['student_id','year_id','class_id','id_no'])->get();
       
         return view('backend.marks.mark-details',$data);
    
    }

    public function details($student_id)
    {
      $data['editData'] = MarkEntry::where('student_id',$student_id)->get();
      $data['name'] = MarkEntry::where('student_id',$student_id)->first();

     

      return view('backend.marks.details',$data);
    }

    public function getResult()
    {
      
     $data['years'] =Year::orderBy('id','asc')->get();
        $data['classes'] = StudentClass::orderBy('id','asc')->get();
        $data['exams'] = ExamType::all();
       

      return view('backend.marks.search',$data);
    }

    public function getResultView(Request $request)
    {

        $year_id = $request->year_id;
        $class_id = $request->class_id;
        $exam_type_id = $request->exam_type_id;
        $id_no = $request->id_no;
        $singleStudent = MarkEntry::where('year_id',$year_id)->where('class_id',$class_id)->where('exam_type_id',$exam_type_id)->where('id_no',$id_no)->first();
        if ($singleStudent == true) {
          $data['allmarks'] = MarkEntry::with(['subject','student_name','year_name','class_name','exam_name'])->where('year_id',$year_id)->where('class_id',$class_id)->where('exam_type_id',$exam_type_id)->where('id_no',$id_no)->get();
        }

        return view('backend.marks.result-view',$data);

    }
}
