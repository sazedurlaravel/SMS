@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Add User


                </h3>
                <a class="btn btn-success float-right" href="{{route('users.view')}}"><i class="fa fa-list mr-2"></i>View User</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              	
                <table id="example1" class="table table-bordered table-striped">
                	
				           <form action="{{route('users.store')}}" method="POST">
                    @csrf
                      <div class="form-row">
                        <div class="col-md-6 form-group">
                          <label>Name</label>
                          <input class="form-control" type="text" name="name" placeholder="Enter User Name" >
                        </div>
                        <div class="col-md-6 form-group">
                          <label>Email</label>
                          <input class="form-control" type="email" name="email" placeholder="Enter Email" >
                        </div>
                      </div> 
                      <div class="form-row">
                        <div class="col-md-6 form-group">
                          <label>Password</label>
                          <input class="form-control" type="password" name="password" >
                        </div>
                        <div class="col-md-6 form-group">
                          <label>Confirm Password</label>
                          <input class="form-control" type="password" name="password2" >
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