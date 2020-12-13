<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    public function view()
    {
        $data['allData']=Group::all();
        return view('backend.setup.group.view-group',$data);
    }

    public function add()
    {
        return view('backend.setup.group.add-group');
    }

     public function edit($id)
    {
        $data['editData']=Group::find($id);
        return view('backend.setup.group.add-group',$data);
    }

     public function store(Request $request)
    {
         $this->validate($request,[
            'name' => 'required|unique:groups,name'
            
        ]);

         $group=new Group();
         $group->name=$request->name;
         $group->save();

         return redirect()->route('setups.group.view')->with('success','group Added Successfully !!');
    }

     public function update(Request $request,$id)
    {

         $group=Group::find($id);
         $group->name=$request->name;
         $group->save();

         return redirect()->route('setups.group.view')->with('success','group Updated Successfully !!');
    }
}
