@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  @if(isset($editData))
                  Edit Employee
                  @else
                  Add Employee
                  @endif


                </h3>
                <a class="btn btn-success float-right" href="{{route('employee.view')}}"><i class="fa fa-list mr-2"></i>Employee list</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              	
                <table id="example1" class="table table-bordered table-striped">
                	
				           <form action="{{(@$editData)? route('employee.update',$editData->id):route('employee.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                   
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
                          <label>Father's Name<font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="fname" placeholder="Enter Father's Name" value="{{(@$editData)?$editData->fname:""}}">
                        @error('fname')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-4 form-group">
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

                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <label>Gender<font style="color:red;">*</font></label>
                        <select class="form-control" name="gender">
                          <option value="">Select Gender</option>
                          <option value="male" {{(@$editData->gender=="male")? "selected":""}}>Male</option>
                          <option value="female" {{(@$editData->gender=="female")? "selected":""}}>Female</option>
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
                          <label>Salary <font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="salary" placeholder="Enter Salary Amount" value="{{(@$editData)?$editData->salary:""}}">
                        @error('salary')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Join Date<font style="color:red;">*</font></label>
                        <input class="form-control" type="date" name="join_date"  value="{{(@$editData)?$editData->join_date:""}}">
                        @error('join_date')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Designation<font style="color:red;">*</font></label>
                         <select class="form-control" name="designation_id">
                          <option value="">Select Designation</option>
                          @foreach($designations as $value)
                          <option value="{{$value->id}}" {{(@$editData->designation_id==$value->id)?"selected":""}}>{{$value->name}}</option>
                          @endforeach
                        </select>
                        </div>
                      </div> 
                      <div class="form-row">
                        
                        <div class="col-md-6 form-group">
                         <label>Image<font style="color:red;">*</font></label>
                        <input class="form-control" id="image" type="file" name="image" >
                        @error('image')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-6 form-group">
                          <img src="{{(!empty($editData->image))? asset('backend/img/employee/'.$editData->image):asset('no_img.png')}}" id="showimg" style="width: 100px;height: 100px;margin-left: 72px;">
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