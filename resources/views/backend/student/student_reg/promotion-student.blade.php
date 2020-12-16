@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  
                  Student Promotion


                </h3>
                <a class="btn btn-success float-right" href="{{route('students.view')}}"><i class="fa fa-list mr-2"></i>View Student</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              	
                <table id="example1" class="table table-bordered table-striped">
                	
				           <form action="{{route('students.promotion.store',$editData->student_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{@$editData->id}}">
                    <h3>Student Personal Info</h3>
                    <hr>
                      <div class="form-row">

                        <div class="col-md-4 form-group">
                          <label>Name <font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="name" placeholder="Enter Student Name" value="{{(@$editData)?$editData['student']['name']:""}}">
                        @error('name')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Email<font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="email" placeholder="Enter Email" value="{{(@$editData)?$editData['student']['email']:""}}">
                        @error('email')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Mobile<font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="mobile" placeholder="Enter Mobile" value="{{(@$editData)?$editData['student']['mobile']:""}}">
                        @error('mobile')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                      </div> 

                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <label>Gender<font style="color:red;">*</font></label>
                        <select class="form-control" name="gender">
                          <option value="">Select Gender</option>
                          <option value="male" {{(@$editData['student']['gender']=="male")? "selected":""}}>Male</option>
                          <option value="female">Female</option>
                        </select>
                        @error('gender')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                         <div class="col-md-4 form-group">
                         <label>Religion<font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="religion" placeholder="Enter Religion Name" value="{{(@$editData)?$editData['student']['religion']:""}}">
                        @error('religion')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-4 form-group">
                         <label>Date of Birth<font style="color:red;">*</font></label>
                        <input class="form-control" type="date" name="dob"  value="{{(@$editData)?$editData['student']['dob']:""}}">
                        @error('dob')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-4 form-group">
                         <label>Address<font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="address" placeholder="Enter Address" value="{{(@$editData)?$editData['student']['address']:""}}">
                        @error('address')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-4 form-group">
                         <label>Image<font style="color:red;">*</font></label>
                        <input class="form-control" id="image" type="file" name="image" value="{{(@$editData)?$editData['student']['image']:""}}">
                        @error('image')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <img src="{{(!empty($editData['student']['image']))? asset('backend/img/student/'.$editData['student']['image']):asset('no_img.png')}}" id="showimg" style="width: 100px;height: 100px;margin-left: 72px;">
                        </div>
                      </div>
                      <h3>Gardian Info</h3>
                      <hr>
                      <div class="form-row">
                        <div class="col-md-6 form-group">
                          <label>Father's Name<font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="fname" placeholder="Enter Father's Name" value="{{(@$editData)?$editData['student']['fname']:""}}">
                        @error('fname')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-6 form-group">
                          <label>Mother's Name<font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="mname" placeholder="Enter Mother's Name" value="{{(@$editData)?$editData['student']['mname']:""}}">
                        @error('mname')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        
                      </div>
                      <h3>Academic Information</h3>
                      <hr>
                      <div class="form-row">
                        
                        <div class="col-md-3 form-group">
                          <label>Class<font style="color:red;">*</font></label>
                        <select class="form-control" name="class_id">
                          <option value="">Select Class</option>
                          @foreach($classes as $class)
                          <option value="{{$class->id}}" {{(@$editData->class_id==$class->id)? "selected":""}}>{{$class->name}}</option>
                          @endforeach
                        </select>

                        @error('class_id')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-3 form-group">
                          <label>Year<font style="color:red;">*</font></label>
                        <select class="form-control" name="year_id">
                          <option value="">Select Academic Year</option>
                          @foreach($years as $year)
                          <option value="{{$year->id}}" {{(@$editData->year_id==$year->id)? "selected":""}}>{{$year->name}}</option>
                          @endforeach
                        </select>
                        @error('year_id')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-3 form-group">
                          <label>Group</label>
                        <select class="form-control" name="group_id">
                          <option value="">Select Group</option>
                           @foreach($groups as $group)
                          <option value="{{$group->id}}" {{(@$editData->group_id==$group->id)? "selected":""}}>{{$group->name}}</option>
                          @endforeach
                        </select>
                        @error('group_id')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-3 form-group">
                          <label>Shift</label>
                        <select class="form-control" name="shift_id">
                          <option value="">Select Shift</option>
                           @foreach($shifts as $shift)
                          <option value="{{$shift->id}}" {{(@$editData->shift_id==$shift->id)? "selected":""}}>{{$shift->name}}</option>
                          @endforeach
                        </select>
                        @error('shift_id')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 form-group">
                          <label>Fee Category<font style="color:red;">*</font></label>
                        <select class="form-control" name="fee_category_id">
                          <option value="">Select Fee Type</option>
                           @foreach($fees as $fee)
                          <option value="{{$fee->id}}" {{(@$editData['discount']['fee_category_id']==$fee->id)?"selected":"" }}>{{$fee->name}}</option>
                          @endforeach
                        </select>
                        @error('shift_id')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-6 form-group">
                          <label>Discount</label>
                        <input type="text" name="discount" class="form-control" placeholder="Enter Discount Amount" value="{{(@$editData)? $editData['discount']['discount']:"" }}">
                        @error('discount')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                      </div>
                      
                      <div class="form-row">
                        <button type="submit" class="btn btn-success">
                            @if(isset($editData))
                            Update
                            @else
                            Submit
                            @endif
                        </button>
                      </div>
                   </form>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection