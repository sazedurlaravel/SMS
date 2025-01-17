@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  @if(isset($editData))
                  Edit User
                  @else
                  Add User
                  @endif


                </h3>
                <a class="btn btn-success float-right" href="{{route('users.view')}}"><i class="fa fa-list mr-2"></i>View User</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                
                <table id="example1" class="table table-bordered table-striped">
                  
                   <form action="{{route('users.update',$editData->id)}}" method="POST">
                    @csrf
                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <label>Role</label>
                          <select class="form-control" name="role">
                            <option value="">Select Role</option>
                            <option value="admin" {{($editData->role=='admin')?"selected":""}}>Admin</option>
                            <option value="user" {{($editData->role=="user")? "selected":""}}>User</option>
                          </select>
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Name</label>
                          <input class="form-control" type="text" name="name" placeholder="Enter User Name" value="{{$editData->name}}">
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Email</label>
                          <input class="form-control" type="email" name="email" placeholder="Enter Email" value="{{$editData->email}}">
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