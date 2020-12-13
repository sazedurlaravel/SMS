<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeeAmount;
use App\FeeCategory;
use App\StudentClass;


class FeeAmountController extends Controller
{
    public function view()
    {
    	$data['allData']=FeeAmount::select('fee_category_id')->groupBy('fee_category_id')->get();
    	return view('backend.setup.fee.amount.view-amount',$data);
    }

    public function add()
    {
        $data['feeCategories']=FeeCategory::all();
        $data['classes']=StudentClass::all();
    	return view('backend.setup.fee.amount.add-amount',$data);
    }

    public function edit($fee_category_id)
    {
      $data['feeCategories']=FeeCategory::all();
      $data['classes']=StudentClass::all();
    	$data['editData']=FeeAmount::where('fee_category_id',$fee_category_id)->get();
    	return view('backend.setup.fee.amount.edit-amount',$data);
    }

    public function store(Request $request)
    {
       
       $amounts = $request->class_id;

       if ($amounts != NULL) {
           for ($i = 0; $i < count($amounts); $i++) {
            $FeeAmount=new FeeAmount();
            $FeeAmount->fee_category_id=$request->fee_category_id;
            $FeeAmount->class_id=$request->class_id[$i];
            $FeeAmount->amount=$request->amount[$i];
            $FeeAmount->save();
        }
       }

        return redirect()->route('fee.amount.view')->with('success','FeeAmount added successfully !!');

       }

       public function update(Request $request,$fee_category_id)
       {
        if ($request->class_id==NULL) {
          return back()->with('error','Sorry you have an error');
        }else{

          FeeAmount::where('fee_category_id',$fee_category_id)->delete();

         $amounts = $request->class_id;
         if ($amounts != NULL) {
           for ($i = 0; $i < count($amounts); $i++) {
            $FeeAmount=new FeeAmount();
            $FeeAmount->fee_category_id=$request->fee_category_id;
            $FeeAmount->class_id=$request->class_id[$i];
            $FeeAmount->amount=$request->amount[$i];
            $FeeAmount->save();
        }
        }

       
       }

        return redirect()->route('fee.amount.view')->with('success','FeeAmount added successfully !!');

       }

       public function details($fee_category_id)
       {
        $data['editData']=FeeAmount::where('fee_category_id',$fee_category_id)->orderBy('class_id','asc')->get();
        return view('backend.setup.fee.amount.view-fee-details',$data);
       }

     
}
