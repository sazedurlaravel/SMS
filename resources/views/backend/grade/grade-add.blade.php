@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                Grade Add


                </h3>
                <a class="btn btn-success float-right" href="{{route('grade.view')}}"><i class="fa fa-list mr-2"></i>View Grade Point</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              	
                <table id="example1" class="table table-bordered table-striped">
                	
				           <form action="{{route('grade.store')}}" method="POST">
                    @csrf
                      <div class="form-row">
                        <div class="col-md-3 form-group">
                           <label>Grade Name</label>
                         <input type="text" class="form-control" name="grade_name" placeholder="Enter Grade Name">
                        </div>
                        <div class="col-md-3 form-group">
                          <label>Start Mark</label>
                          <input class="form-control" type="text" name="start_marks" placeholder="Enter Start Mark" >
                        </div>
                        <div class="col-md-3 form-group">
                          <label>End Marks</label>
                          <input class="form-control" type="text" name="end_marks" placeholder="Enter End Marks" >
                        </div>
                        <div class="col-md-3 form-group">
                          <label>Grade Point</label>
                          <input class="form-control" type="text" name="grade_point" placeholder="Enter Grade Point" >
                        </div>
                      </div> 
                     
                      <div class="form-row">
                         <div class="col-md-6 form-group">
                          <button type="submit" class="btn btn-success">
                           Submit
                        </button>
                        </div>
                      </div>    
                   </form>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection