<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function viewNotice(){
        return view('frontend.pages.notice-view');
    }

    public function create(){
        return view('frontend.pages.notice-add');
    }
}
