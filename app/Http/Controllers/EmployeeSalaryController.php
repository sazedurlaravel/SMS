<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeSalarylog;
use App\AssignStudent;
use App\Designation;
use App\User;
use DB;
use PDF;

class EmployeeSalaryController extends Controller
{
    public function view(Request $request)
    {
    	$data['allData'] = User::where('userType','employee')->get();
    	
    	return view('backend.employee.employee_salary.view-employee-salary',$data);
    }

    

   

    public function increment($id)
    {	

    	$data['editData'] = User::find($id);
    	
    	return view('backend.employee.employee_salary.increment-employee-salary',$data);
    }

    public function store(Request $request,$id)
    {

    		$user = User::find($id);
    		$previous_salary = $user->salary;
    		$increment_salary = $request->increment_salary;
    		$present_salary = (float)$previous_salary+(float)$increment_salary;
    		$user->salary = $present_salary;
    		$user->save();

    		$salary_data = new EmployeeSalarylog();
    		$salary_data->employee_id = $id;
    		$salary_data->previous_salary =$previous_salary;
    		$salary_data->present_salary =$present_salary;
    		$salary_data->increment_salary =$increment_salary;
    		$salary_data->effected_date =date('Y-m-d',strtotime($request->effected_date));

    		$salary_data->save();
    		
            
            
    	return redirect()->route('employee.salary.view')->with('success','Employee Salary Increment Successfully !!');
    }

    
    
public function details($id)
{
	
	$data['details'] = User::find($id);
	$data['salary_log'] = EmployeeSalarylog::where("employee_id",$data['details']->id)->get();
	return view('backend.employee.employee_salary.employee-salary-details',$data);
}

}
