<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Year;

class YearController extends Controller
{
    public function view()
    {
        $data['allData']=Year::all();
        return view('backend.setup.year.view-year',$data);
    }

    public function add()
    {
        return view('backend.setup.year.add-year');
    }

     public function edit($id)
    {
        $data['editData']=Year::find($id);
        return view('backend.setup.year.add-year',$data);
    }

     public function store(Request $request)
    {
         $this->validate($request,[
            'name' => 'required|unique:years,name'
            
        ]);

         $year=new Year();
         $year->name=$request->name;
         $year->save();

         return redirect()->route('setups.year.view')->with('success','Year Added Successfully !!');
    }

     public function update(Request $request,$id)
    {

         $year=Year::find($id);
         $year->name=$request->name;
         $year->save();

         return redirect()->route('setups.year.view')->with('success','Year Updated Successfully !!');
    }
}
