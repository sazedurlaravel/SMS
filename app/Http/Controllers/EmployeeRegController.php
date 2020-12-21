<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\EmployeeSalarylog;
use App\AssignStudent;
use App\Designation;
use App\User;
use DB;
use PDF;


class EmployeeRegController extends Controller
{
     public function view(Request $request)
    {
    	$data['allData'] = User::where('userType','employee')->get();
    	
    	return view('backend.employee.employee_reg.view-employee',$data);
    }

    

    public function add()
    {	
    	$data['designations'] = Designation::all();

    	return view('backend.employee.employee_reg.add-employee',$data);
    }

    public function edit($id)
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

    		$checkYear=date('Y',strtotime($request->join_date));
    		
    		$employee=User::where('userType','employee')->orderBy('id','desc')->first();
    		if ($employee == NULL) {
    			$firstReg = 0;
    			$employeeId = $firstReg+1;
    			if ($employeeId < 10) {
    				$id_no = '000'.$employeeId;
    			}elseif($employeeId < 100){
    				$id_no = '00'.$employeeId;
    			}elseif ($employeeId < 1000) {
    				$id_no = '0'.$employeeId;
    			}
    		}else{
    			$employee=User::where('userType','employee')->orderBy('id','desc')->first()->id;
    			$employeeId = $employee+1;
    			if ($employeeId < 10) {
    				$id_no = '000'.$employeeId;
    			}elseif($employeeId < 100){
    				$id_no = '00'.$employeeId;
    			}elseif ($employeeId < 1000) {
    				$id_no = '0'.$employeeId;
    			}
    		}
    		
    		
    		$final_id_no = $checkYear.$id_no;
    		$code = rand(0000,9999);
    		$user= new User();
    		$user->name =$request->name;
    		$user->userType ='employee';
    		$user->fname =$request->fname;
    		$user->mname =$request->mname;
    		$user->mobile =$request->mobile;
    		$user->email =$request->email;
    		$user->password =bcrypt($code);
    		$user->code =$code;
    		$user->address =$request->address;
    		$user->gender =$request->gender;
    		$user->join_date =$request->join_date;
    		$user->religion =$request->religion;
    		$user->designation_id =$request->designation_id;
    		$user->salary =$request->salary;
    		$user->dob =date('Y-m-d',strtotime($request->dob));
    		$user->id_no =$final_id_no;
    		if ($request->hasFile('image')) {
    			//insert that image
    			$image = $request->file('image');
    			$img = time().'.'.$image->getClientOriginalExtension();
    			$location = public_path('backend/img/employee/'.$img);
    			Image::make($image)->save($location);
                $user->image = $img;
    		}
           
    		$user->save();
    		$employee_salary = new EmployeeSalarylog();
    		$employee_salary->employee_id =$user->id;
    		$employee_salary->previous_salary =$request->salary;
    		$employee_salary->present_salary =$request->salary;
    		$employee_salary->present_salary =$request->salary;
    		$employee_salary->increment_salary ='0';
    		$employee_salary->effected_date =$request->join_date;
    		$employee_salary->save();
    		
            
            


    	});

    	return redirect()->route('employee.view')->with('success','Employee Registration Successfully !!');
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
            $discount_student->fee_category_id =$request->fee_category_id;
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

public function details($student_id)
{
	$data['details'] = AssignStudent::with('student','discount')->where('student_id',$student_id)->first();
	$pdf = PDF::loadView('backend.student.student_reg.student-details-pdf',$data);
	return $pdf->stream('document.pdf');
}
}
