<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
     public function view()
    {
    	$id = Auth::user()->id;
    	$user = User::find($id);
    	return view('backend.users.profiles.view-profile',compact('user'));
    }
    public function edit()
    {
    	$id=Auth::user()->id;
    	$editData=User::find($id);
    	return view('backend.users.profiles.edit-profile',compact('editData'));
    }

    public function update(Request $request)
    {	
    	
    	$user=User::find(Auth::user()->id);
    	$user->name =$request->name;
    	$user->gender =$request->gender;
    	$user->email =$request->email;
    	$user->mobile =$request->mobile;
    	$user->address =$request->address;
    	$user->save();
    	
    	
    	// if($request->hasFile('image'))
     //    {

     //       $image=$request->file('image');
     //        $img=time().'.'.$image->getClientOriginalExtension();
     //        $location =public_path('images/users/'.$img);
     //        Image::make($image)->save($location);

     //        //
     //        $user->image=$img;

     //    }
    	
    	return redirect()->route('profiles.view')->with('success','Profile Updated');
    }

    public function password()
    {
    	return view('backend.users.profiles.edit-password');
    }

    public function passwordUpdate(Request $request)
    {
    	
    	if (Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->current_password])) {
    		
    		$user=User::find(Auth::user()->id);
    		$user->password = bcrypt($request->new_password);
    		$user->save();

    		return redirect()->route('profiles.view')->with('success','Password changed successfully !!');

    	}else{
    		return back()->with('error','Please Enter your current password');
    	}

    }
}
