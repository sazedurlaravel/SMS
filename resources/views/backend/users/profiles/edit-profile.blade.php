@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  @if(isset($editData))
                  Edit Profile
                  @else
                  Add Profile
                  @endif


                </h3>
                <a class="btn btn-success float-right" href="{{route('profiles.view')}}"><i class="fa fa-list mr-2"></i>View Profile</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                
                <table id="example1" class="table table-bordered table-striped">
                  
                   <form action="{{route('profiles.update',$editData->id)}}" method="POST">
                    @csrf
                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <label>Name</label>
                          <input class="form-control" type="text" name="name" placeholder="Enter User Name" value="{{$editData->name}}">
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Email</label>
                          <input class="form-control" type="email" name="email" placeholder="Enter Email" value="{{$editData->email}}">
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Mobile</label>
                          <input class="form-control" type="text"placeholder="Enter Mobile Number" name="mobile" value="{{$editData->mobile}}">
                        </div>
                      </div> 

                      <div class="form-row">
                        <div class="col-md-3 form-group">
                          <label>Address</label>
                          <input class="form-control" type="text" name="address" placeholder="Enter Address" value="{{$editData->address}}">
                        </div>
                        <div class="col-md-3 form-group">
                          <label>Gender</label>
                         <select class="form-control" name="gender">
                           <option value="">Select Gender</option>
                           <option value="male" {{($editData->gender=="male")?'selected':""}}>Male</option>
                           <option value="female" {{($editData->gender=="female")?'selected':""}}>Female</option>
                         </select>
                        </div>
                        <div class="col-md-3 form-group">
                          <label>Upload image</label>
                          <input class="form-control" type="file" name="image" >
                        </div>
                      </div> 
                      
                      <div class="form-row">
                         <div class="col-md-6 form-group">
                          <button type="submit" class="btn btn-success">
                            @if(isset($editData))
                            Update
                            @else
                            Submit
                            @endif
                        </button>
                        </div>
                      </div>    
                   </form>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection