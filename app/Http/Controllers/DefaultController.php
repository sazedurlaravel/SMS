<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Subject;
use App\Group;
use App\StudentClass;
use App\EmployeeSalarylog;

class DefaultController extends Controller
{
	public function dashboard()
	{
		//total student
		$studentCount=User::where('userType','student')->get();

		for ($i=0; $i < count($studentCount); $i++) { 
			
		}

		$data['student_num'] = $i;

		//Total Subject

		$subjectCount = Subject::all();
		for ($i=0; $i <count($subjectCount) ; $i++) { 
			
		}
		$data['totalSub'] = $i;
		//total user register
		$stuRegCount = User::all();
		for ($i=0; $i <count($stuRegCount) ; $i++) { 
			
		}
		$data['stuRegNum'] = $i;
		//Total group
		$group_count = Group::all();
		for ($i=0; $i < count($group_count); $i++) { 
			
		}
		$data['total_group'] = $i;

		//total class
		$class_count = StudentClass::all();
		for ($i=0; $i <count($class_count) ; $i++) { 
			
		}
		$data['totalClass'] = $i;
		//total employee 
		$employee_count = user::where('userType','employee')->get();
		for ($i=0; $i <count($employee_count) ; $i++) { 
			
		}
		$data['totalEmployee'] = $i;
    return view('backend.layouts.index',$data);

	} 
   		
}
