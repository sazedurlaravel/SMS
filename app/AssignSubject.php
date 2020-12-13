<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignSubject extends Model
{
   public function class_name()
   {
   	return $this->belongsTo(StudentClass::class,'class_id','id');
   }

    public function subject_name()
   {
   	return $this->belongsTo(Subject::class,'subject_id','id');
   }
}
