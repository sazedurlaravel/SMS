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
use App\FeeAmount;
use DB;
use PDF;

class RegFeeController extends Controller
{
   public function view(Request $request)
    {
    	$data['classes'] = StudentClass::all();
    	$data['years'] = Year::orderBy('id','desc')->get();
    	$data['year_id'] = Year::orderBy('id','desc')->first()->id;
    	$data['class_id'] = StudentClass::orderBy('id','asc')->first()->id;
    	$data['allData']=AssignStudent::where('year_id',$data['year_id'])->where('class_id',$data['class_id'])->get();
    	
    	
    	return view('backend.student.student_fee.view-reg-fee',$data);
    }

    public function getStudent(Request $request)
    {
    	

    	$year_id = $request->year_id;
    	$class_id = $request->class_id;
    	
    	if ($year_id !='') {
    		$where[] = ['year_id','like',$year_id.'%'];
    	}
    	if ($class_id !='') {
    		$where[] = ['class_id','like',$class_id.'%'];
    	}
    	$allStudent = AssignStudent::with(['discount','student'])->where($where)->get();

    	
     
    	
    	
           

    	// $html['thsource'] = '<th>SL</th>';
    	// $html['thsource'] .= '<th>ID NO</th>';
    	// $html['thsource'] .= '<th>Student Name</th>';
    	// $html['thsource'] .= '<th>Roll</th>';
    	// $html['thsource'] .= '<th>Registration Fee</th>';
    	// $html['thsource'] .= '<th>Discount Amount</th>';
    	// $html['thsource'] .= '<th>Fee (This student)</th>';
    	// $html['thsource'] .= '<th>Action</th>';

        $registrationfee = FeeAmount::where('fee_category_id','1')->where('class_id',$class_id)->first();
    	
           foreach ($allStudent as $key => $value) {
           	$color='success';
           	$html = '<td>'.($key+1).'</td>';
           	$html .= '<td>'.$value['student']['id_no'].'</td>';
           	$html .= '<td>'.$value['student']['name'].'</td>';
           	$html .= '<td>'.$value->roll.'</td>';
           	$html .= '<td>'.$registrationfee->amount.' tk'.'</td>';
           	$html .= '<td>'.$value['discount']['discount'].'</td>';

           	$original_fee = $registrationfee->amount;
           	$discount = $value['discount']['discount'];
           	$final_fee = (float)$original_fee-(float)$discount;

           	$html .= '<td>'.$final_fee.' tk'.'</td>';
           	$html .= '<td>';
            $html .= ' <a class="btn btn-sm btn-'.$color.'"title="Payslip" target="_blank" href="'.route("student.fee.payslip"). '?class_id='.$value->class_id.'&student_id='.$value->student_id.'">Fee Slip</a> ';
           	$html .= '</td>';

           }


     return response()->json(@$html);
         
    	

    	
    }

    public function payslip(Request $request)
    {
    	
    	$student_id = $request->student_id;
    	$class_id = $request->class_id;
       
    	$data['details'] = AssignStudent::with(['discount','student'])->where('student_id',$student_id)->where('class_id',$class_id)->first();
    	$pdf = PDF::loadView('backend.student.student_fee.pay-slip-pdf',$data);
  return $pdf->stream('document.pdf');

    }
}
