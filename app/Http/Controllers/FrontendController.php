<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\AssignStudent;
use App\StudentClass;
use App\Group;
use App\Shift;
use App\FeeCategory;
use App\User;
use App\DiscountStudent;
use App\Year;
use App\Slider;
use DB;
use PDF;

class FrontendController extends Controller
{
    public function viewTeacher()
    {
    	$Data['allData'] = User::where('userType','teacher')->get();
        $Data['sliders'] = Slider::all();
    	
    	return view('frontend.pages.index',$Data);
    }

}
