<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function view()
    {	
        
        $data['allData'] = User::all();
        return view('backend.users.view-user',$data);

      
           
      
    }
    public function add()
    {
        
         return view('backend.users.add-user');
     
    }

    public function edit($id)
    {
        $editData=User::find($id);
         return view('backend.users.edit-user',compact('editData'));
     
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:users,email'
            

        ]);
        $code=rand(0000,9999);
    	$Data = new User;
    	$Data->userType = "admin";
        $Data->name = $request->name;
    	$Data->email = $request->email;
        $Data->role = $request->role;
    	$Data->password = bcrypt($code);
        $Data->code = $code;
    	$Data->save();

    	return redirect()->route('users.view')->with('success','User added successfully !!');

    }

    

    public function update(Request $request,$id)
    {
        $Data =User::find($id);
        $Data->userType = "admin";
        $Data->name = $request->name;
        $Data->email = $request->email;
        $Data->role = $request->role;
        $Data->save();

        return redirect()->route('users.view')->with('success','User Updated successfully !!');
    }

    public function delete($id)
    {
         if (Auth::user()->role=='admin') {
          $user=User::find($id);
            $user->delete();
            return redirect()->route('users.view')->with('success','User Deleted successfully !!');
        }else{
            return back()->with('error','Sorry !, Your role is not admin !!');
        }

       
    }
}
