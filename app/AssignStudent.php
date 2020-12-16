<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignStudent extends Model
{
    public function student()
    {
    	return $this->belongsTo(User::class,'student_id','id');
    }

     public function year()
    {
    	return $this->belongsTo(Year::class,'year_id','id');
    }
    public function class()
    {
    	return $this->belongsTo(StudentClass::class,'class_id','id');
    }
    public function discount()
    {
        return $this->belongsTo(DiscountStudent::class,'id','assign_student_id');
    }
}
