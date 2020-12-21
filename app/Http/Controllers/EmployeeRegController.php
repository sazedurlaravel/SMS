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
    {	
    	$data['editData'] = User::find($id);
    	$data['designations'] = Designation::all();
    	return view('backend.employee.employee_reg.add-employee',$data);
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

    public function update(Request $request,$id)
    {
    	
		DB::transaction(function() use($request,$id){

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
    		$user= User::find($id);
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
    			@unlink(public_path('backend/img/employee/'.$img));
    			$img = time().'.'.$image->getClientOriginalExtension();
    			$location = public_path('backend/img/employee/'.$img);
    			Image::make($image)->save($location);
                $user->image = $img;
    		}
           
    		$user->save();
    		
            
            


    	});

    	return redirect()->route('employee.view')->with('success','Employee Registration Updated Successfully !!');
}
 

    
public function details($id)
{
	
	$data['details'] = User::find($id);
	$pdf = PDF::loadView('backend.employee.employee_reg.emplyee-details-pdf',$data);
	return $pdf->stream('document.pdf');
}
}
