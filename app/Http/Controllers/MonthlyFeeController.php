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

class MonthlyFeeController extends Controller
{
    public function view(Request $request)
    {
    	$data['classes'] = StudentClass::all();
    	$data['years'] = Year::orderBy('id','desc')->get();
    	$data['year_id'] = Year::orderBy('id','desc')->first()->id;
    	$data['class_id'] = StudentClass::orderBy('id','asc')->first()->id;
    	$data['allData']=AssignStudent::where('year_id',$data['year_id'])->where('class_id',$data['class_id'])->get();
    	
    	
    	return view('backend.student.monthly_fee.view-monthly-fee',$data);
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

        $registrationfee = FeeAmount::where('fee_category_id','2')->where('class_id',$class_id)->first();
    	     $html = '';
           foreach ($allStudent as $key => $value) {
           	$color='success';
            $html .= '<tr>';
           	$html .= '<td>'.($key+1).'</td>';
           	$html .= '<td>'.$value['student']['id_no'].'</td>';
           	$html .= '<td>'.$value['student']['name'].'</td>';
           	$html .= '<td>'.$value->roll.'</td>';
           	$html .= '<td>'.$registrationfee->amount.' tk'.'</td>';
           	$html .= '<td>'.$value['discount']['discount'].'%'.'</td>';

           	$original_fee = $registrationfee->amount;
           	$discount = $value['discount']['discount'];
           	$discountable_fee = $discount/100*$original_fee;
           	$final_fee = (float)$original_fee-(float)$discountable_fee;

           	$html .= '<td>'.$final_fee.' tk'.'</td>';
           	$html .= '<td>';
            $html .= ' <a class="btn btn-sm btn-'.$color.'"title="Payslip" target="_blank" href="'.route("monthly.fee.payslip"). '?class_id='.$value->class_id.'&student_id='.$value->student_id.'&month='.$request->month.'">Fee Slip</a> ';
           	$html .= '</td>';
            $html .= '</tr>';

           }



     return response()->json(@$html);
         
    	
    }
    public function payslip(Request $request)
    {
    	
    	$student_id = $request->student_id;
    	$class_id = $request->class_id;
      
       $data['month'] = $request->month;

    	$data['details'] = AssignStudent::with(['discount','student'])->where('student_id',$student_id)->where('class_id',$class_id)->first();
    	$pdf = PDF::loadView('backend.student.monthly_fee.pay-slip-pdf',$data);
  return $pdf->stream('document.pdf');

    }
}
