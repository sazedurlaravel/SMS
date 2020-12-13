@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                 
                  Change Password
                  
                </h3>
                <a class="btn btn-success float-right" href="{{route('profiles.view')}}"><i class="fa fa-list mr-2"></i>View Profile</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                
                <table id="example1" class="table table-bordered table-striped">
                  
                   <form action="{{route('profiles.password.update')}}" method="POST">
                    @csrf
                      <div class="form-row">
                        <div class="col-md-6 form-group">
                          <label>Current Password</label>
                          <input class="form-control" type="password" name="current_password" placeholder="Current Password" >
                          @error('current_password')
                            <div class="alert" style="color:red;">
                              <button type="button" class="close" data-dismiss="alert">×</button>    
                              <strong>{{ $message }}</strong>
                          </div>
                          @enderror
                        </div>
                        <div class="col-md-6 form-group">
                          <label>New Password</label>
                          <input class="form-control" type="password" name="new_password"  placeholder="New Password">
                        </div>
                        
                      </div> 

                     
                      
                      <div class="form-row">
                         <div class="col-md-6 form-group">
                          <button type="submit" class="btn btn-success">
                            
                            Update
                           
                        </button>
                        </div>
                      </div>    
                   </form>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection