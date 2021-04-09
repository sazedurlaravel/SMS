<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Slider;

class SliderController extends Controller
{
    public function view(){
        $data['sliders']= Slider::all();
        return view('backend.slider.view-slider',$data);
    }
    public function create(){
       
        return view('backend.slider.create');
    }

    public function edit($id){
        $data['editData']= Slider::find($id);
        return view('backend.slider.slider-edit',$data);
    }
    public function store(Request $request){
        $slider = new Slider();
        if ($request->hasFile('image')) {
            //insert that image
            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('backend/img/slider/'.$img);
            Image::make($image)->save($location);
             
            $slider->image = $img;
        }
       
        $slider->save();

        return back()->with('success','Image Added Successfully');
    }
    public function update(Request $request,$id){
        $slider = Slider::find($id);
       
        if ($request->hasFile('image')) {
           
            //insert that image
            $image = $request->file('image');
           
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('backend/img/slider/'.$img);
            Image::make($image)->save($location);
             
            $slider->image = $img;
        }
       
        $slider->update();

        return back()->with('success','Image Added Successfully');
    }

    public function delete($id){
        $slider = Slider::find($id);
        $slider->delete();

        return back()->with('success','Data Deleted success !');
    }
    
}
