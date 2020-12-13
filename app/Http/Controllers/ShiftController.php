<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shift;

class ShiftController extends Controller
{
    public function view()
    {
        $data['allData']=Shift::all();
        return view('backend.setup.shift.view-shift',$data);
    }

    public function add()
    {
        return view('backend.setup.shift.add-shift');
    }

     public function edit($id)
    {
        $data['editData']=Shift::find($id);
        return view('backend.setup.shift.add-shift',$data);
    }

     public function store(Request $request)
    {
         $this->validate($request,[
            'name' => 'required|unique:shifts,name'
            
        ]);

         $shift=new Shift();
         $shift->name=$request->name;
         $shift->save();

         return redirect()->route('setups.shift.view')->with('success','shift Added Successfully !!');
    }

     public function update(Request $request,$id)
    {

         $shift=Shift::find($id);
         $shift->name=$request->name;
         $shift->save();

         return redirect()->route('setups.shift.view')->with('success','shift Updated Successfully !!');
    }
}
