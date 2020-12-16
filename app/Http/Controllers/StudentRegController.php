<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\AssignStudent;
use App\StudentClass;
use App\Group;
use App\Shift;
use App\FeeCategory;
use App\User;
use App\DiscountStudent;
use App\Year;
use DB;


class StudentRegController extends Controller
{
    public function view(Request $request)
    {
    	$data['classes'] = StudentClass::all();
    	$data['years'] = Year::all();
    	$data['year_id'] = $request->year_id;
    	$data['class_id'] = $request->class_id;
    	$data['allData']=AssignStudent::where('year_id',$request->year_id)->where('class_id',$request->class_id)->get();
    	
    	return view('backend.student.student_reg.view-student',$data);
    }

    public function classYearWise(Request $request)
    {
    	$data['classes'] = StudentClass::all();
    	$data['years'] = Year::orderBy('id','asc')->get();
    	$data['year_id'] = $request->year_id;
    	$data['class_id'] = $request->class_id;
    	$data['allData']=AssignStudent::where('year_id',$request->year_id)->where('class_id',$request->class_id)->get();
    	
    	return view('backend.student.student_reg.view-student',$data);
    }

    public function add()
    {	$data['classes'] = StudentClass::all();
    	$data['years'] = Year::all();
    	$data['groups'] = Group::all();
    	$data['shifts'] = Shift::all();
    	$data['fees'] = FeeCategory::all();
    	$data['dis_stu'] = DiscountStudent::all();
    	return view('backend.student.student_reg.add-student',$data);
    }

    public function edit($student_id)
    {	$data['editData'] = AssignStudent::with('student','discount')->where('student_id',$student_id)->first();
    	$data['classes'] = StudentClass::all();
    	$data['years'] = Year::all();
    	$data['groups'] = Group::all();
    	$data['shifts'] = Shift::all();
    	$data['fees'] = FeeCategory::all();
    	return view('backend.student.student_reg.add-student',$data);
    }

    public function store(Request $request)
    {
    	
    	DB::transaction(function() use($request){

    		$checkYear=Year::find($request->year_id)->name;
    		$student=User::where('userType','student')->orderBy('id','desc')->first();
    		if ($student == NULL) {
    			$firstReg = 0;
    			$studentId = $firstReg+1;
    			if ($studentId < 10) {
    				$id_no = '000'.$studentId;
    			}elseif($studentId < 100){
    				$id_no = '00'.$studentId;
    			}elseif ($studentId < 1000) {
    				$id_no = '0'.$studentId;
    			}
    		}else{
    			$student=User::where('userType','student')->orderBy('id','desc')->first()->id;
    			$studentId = $student+1;
    			if ($studentId < 10) {
    				$id_no = '000'.$studentId;
    			}elseif($studentId < 100){
    				$id_no = '00'.$studentId;
    			}elseif ($studentId < 1000) {
    				$id_no = '0'.$studentId;
    			}
    		}
    		
    		
    		$final_id_no = $checkYear.$id_no;
    		$code = rand(0000,9999);
    		$user= new User();
    		$user->name =$request->name;
    		$user->userType ='student';
    		$user->fname =$request->fname;
    		$user->mname =$request->mname;
    		$user->mobile =$request->mobile;
    		$user->email =$request->email;
    		$user->password =bcrypt($code);
    		$user->code =$code;
    		$user->address =$request->address;
    		$user->gender =$request->gender;
    		$user->religion =$request->religion;
    		$user->dob =date('Y-m-d',strtotime($request->dob));
    		$user->id_no =$final_id_no;
    		if ($request->hasFile('image')) {
    			//insert that image
    			$image = $request->file('image');
    			$img = time().'.'.$image->getClientOriginalExtension();
    			$location = public_path('backend/img/student/'.$img);
    			Image::make($image)->save($location);
    		}
    		$user->image = $img;
    		$user->save();
    		$assign_student = new AssignStudent();
    		$assign_student->student_id =$user->id;
    		$assign_student->year_id =$request->year_id;
    		$assign_student->class_id =$request->class_id;
    		$assign_student->group_id =$request->group_id;
    		$assign_student->shift_id =$request->shift_id;
    		$assign_student->save();
    		$discount_student = new DiscountStudent();
    		$discount_student->assign_student_id =$assign_student->id;
    		$discount_student->discount =$request->discount;
    		$discount_student->save();


    	});

    	return redirect()->route('students.view')->with('success','Student Registration Successfully !!');
    }

    public function update(Request $request,$student_id)
    {
    	

    	DB::transaction(function() use($request,$student_id){

    		$checkYear=Year::find($request->year_id)->name;
    		$student=User::where('userType','student')->orderBy('id','desc')->first();
    		if ($student == NULL) {
    			$firstReg = 0;
    			$studentId = $firstReg+1;
    			if ($studentId < 10) {
    				$id_no = '000'.$studentId;
    			}elseif($studentId < 100){
    				$id_no = '00'.$studentId;
    			}elseif ($studentId < 1000) {
    				$id_no = '0'.$studentId;
    			}
    		}else{
    			$student=User::where('userType','student')->orderBy('id','desc')->first()->id;
    			$studentId = $student+1;
    			if ($studentId < 10) {
    				$id_no = '000'.$studentId;
    			}elseif($studentId < 100){
    				$id_no = '00'.$studentId;
    			}elseif ($studentId < 1000) {
    				$id_no = '0'.$studentId;
    			}
    		}
    		
    		
    		$final_id_no = $checkYear.$id_no;
    		$code = rand(0000,9999);
    		$user=User::where('id',$student_id)->first();
    		$user->name =$request->name;
    		$user->userType ='student';
    		$user->fname =$request->fname;
    		$user->mname =$request->mname;
    		$user->mobile =$request->mobile;
    		$user->email =$request->email;
    		$user->password =bcrypt($code);
    		$user->code =$code;
    		$user->address =$request->address;
    		$user->gender =$request->gender;
    		$user->religion =$request->religion;
    		$user->dob =date('Y-m-d',strtotime($request->dob));
    		$user->id_no =$final_id_no;
    		if ($request->hasFile('image')) {
    			//insert that image
    			$image = $request->file('image');
    			@unlink(public_path('backend/img/student/'.$user->image));
    			$img = time().'.'.$image->getClientOriginalExtension();
    			$location = public_path('backend/img/student/'.$img);
    			Image::make($image)->save($location);
    			$user->image = $img;
    		}
    		
    		$user->save();
    		$assign_student =AssignStudent::where('id',$request->id)->where('student_id',$student_id)->first();
    		
    		
    		$assign_student->year_id =$request->year_id;
    		$assign_student->class_id =$request->class_id;
    		$assign_student->group_id =$request->group_id;
    		$assign_student->shift_id =$request->shift_id;
    		$assign_student->save();
    		$discount_student =DiscountStudent::where('assign_student_id',$request->id)->first();
    		$discount_student->discount =$request->discount;
    		$discount_student->save();


    	});

    	return redirect()->route('students.view')->with('success','Student Registration Successfully !!');
}
 public function promotion($student_id)
    {	$data['editData'] = AssignStudent::with('student','discount')->where('student_id',$student_id)->first();
    	$data['classes'] = StudentClass::all();
    	$data['years'] = Year::all();
    	$data['groups'] = Group::all();
    	$data['shifts'] = Shift::all();
    	$data['fees'] = FeeCategory::all();
    	return view('backend.student.student_reg.promotion-student',$data);
    }

    public function promotionStore(Request $request,$student_id)
    {
    	

    	DB::transaction(function() use($request,$student_id){

    		$checkYear=Year::find($request->year_id)->name;
    		$student=User::where('userType','student')->orderBy('id','desc')->first();
    		if ($student == NULL) {
    			$firstReg = 0;
    			$studentId = $firstReg+1;
    			if ($studentId < 10) {
    				$id_no = '000'.$studentId;
    			}elseif($studentId < 100){
    				$id_no = '00'.$studentId;
    			}elseif ($studentId < 1000) {
    				$id_no = '0'.$studentId;
    			}
    		}else{
    			$student=User::where('userType','student')->orderBy('id','desc')->first()->id;
    			$studentId = $student+1;
    			if ($studentId < 10) {
    				$id_no = '000'.$studentId;
    			}elseif($studentId < 100){
    				$id_no = '00'.$studentId;
    			}elseif ($studentId < 1000) {
    				$id_no = '0'.$studentId;
    			}
    		}
    		
    		
    		$final_id_no = $checkYear.$id_no;
    		$code = rand(0000,9999);
    		$user=User::where('id',$student_id)->first();
    		$user->name =$request->name;
    		$user->userType ='student';
    		$user->fname =$request->fname;
    		$user->mname =$request->mname;
    		$user->mobile =$request->mobile;
    		$user->email =$request->email;
    		$user->password =bcrypt($code);
    		$user->code =$code;
    		$user->address =$request->address;
    		$user->gender =$request->gender;
    		$user->religion =$request->religion;
    		$user->dob =date('Y-m-d',strtotime($request->dob));
    		$user->id_no =$final_id_no;
    		if ($request->hasFile('image')) {
    			//insert that image
    			$image = $request->file('image');
    			@unlink(public_path('backend/img/student/'.$user->image));
    			$img = time().'.'.$image->getClientOriginalExtension();
    			$location = public_path('backend/img/student/'.$img);
    			Image::make($image)->save($location);
    			$user->image = $img;
    		}
    		
    		$user->save();
    		$assign_student =new AssignStudent();
    		$assign_student->student_id =$user->id;
    		$assign_student->year_id =$request->year_id;
    		$assign_student->class_id =$request->class_id;
    		$assign_student->group_id =$request->group_id;
    		$assign_student->shift_id =$request->shift_id;
    		$assign_student->save();
    		$discount_student =new DiscountStudent();
    		$discount_student->assign_student_id =$assign_student->id;
    		$discount_student->discount =$request->discount;
    		$discount_student->save();


    	});

    	return redirect()->route('students.view')->with('success','Student Registration Successfully !!');
}
}
