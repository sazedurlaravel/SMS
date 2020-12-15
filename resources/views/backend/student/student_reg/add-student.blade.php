@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  @if(isset($editData))
                  Edit Student
                  @else
                  Add Student
                  @endif


                </h3>
                <a class="btn btn-success float-right" href="{{route('students.view')}}"><i class="fa fa-list mr-2"></i>View Student</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              	
                <table id="example1" class="table table-bordered table-striped">
                	
				           <form action="{{(@$editData)? route('students.update',$editData->id):route('students.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3>Student Personal Info</h3>
                    <hr>
                      <div class="form-row">

                        <div class="col-md-4 form-group">
                          <label>Name <font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="name" placeholder="Enter Student Name" value="{{(@$editData)?$editData->name:""}}">
                        @error('name')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Email<font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="email" placeholder="Enter Email" value="{{(@$editData)?$editData->email:""}}">
                        @error('email')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Mobile<font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="mobile" placeholder="Enter Mobile" value="{{(@$editData)?$editData->mobile:""}}">
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
                          <option value="male">Male</option>
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
                        <input class="form-control" type="text" name="religion" placeholder="Enter Religion Name" value="{{(@$editData)?$editData->religion:""}}">
                        @error('religion')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-4 form-group">
                         <label>Date of Birth<font style="color:red;">*</font></label>
                        <input class="form-control" type="date" name="dob"  value="{{(@$editData)?$editData->dob:""}}">
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
                        <input class="form-control" type="text" name="address" placeholder="Enter Address" value="{{(@$editData)?$editData->address:""}}">
                        @error('address')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-4 form-group">
                         <label>Image<font style="color:red;">*</font></label>
                        <input class="form-control" id="image" type="file" name="image">
                        @error('image')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <img src="{{asset('no_img.png')}}" id="showimg" style="width: 100px;height: 100px;margin-left: 72px;">
                        </div>
                      </div>
                      <h3>Gardian Info</h3>
                      <hr>
                      <div class="form-row">
                        <div class="col-md-6 form-group">
                          <label>Father's Name<font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="fname" placeholder="Enter Father's Name" value="{{(@$editData)?$editData->fname:""}}">
                        @error('fname')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-6 form-group">
                          <label>Mother's Name<font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="mname" placeholder="Enter Mother's Name" value="{{(@$editData)?$editData->mname:""}}">
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
                          <option value="{{$class->id}}">{{$class->name}}</option>
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
                          <option value="{{$year->id}}">{{$year->name}}</option>
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
                          <option value="{{$group->id}}">{{$group->name}}</option>
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
                          <option value="{{$shift->id}}">{{$shift->name}}</option>
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
                          <option value="{{$fee->id}}">{{$fee->name}}</option>
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
                        <input type="text" name="discount" class="form-control" placeholder="Enter Discount Amount">
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