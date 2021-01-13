<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarkEntry extends Model
{
    public function subject()
    {
    	return $this->belongsTo(Subject::class,'subject_id','id');
    }
     public function student_name()
    {
    	return $this->belongsTo(User::class,'student_id','id');
    }
     public function year_name()
    {
    	return $this->belongsTo(Year::class,'year_id','id');
    }
     public function class_name()
    {
    	return $this->belongsTo(StudentClass::class,'class_id','id');
    }
}
