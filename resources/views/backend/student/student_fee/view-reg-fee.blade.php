@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Student</h3>
              </div>
              <div class="card-body">
                
                  <div class="form-row">
                    <div class="col-md-3 form-group">
                      <label>Year<font style="color:red;">*</font></label>
                    <select class="form-control" id="year" name="year_id">
                      <option value="">Select Year</option>
                      @foreach($years as $year)
                      <option value="{{$year->id}}" >{{$year->name}}</option>
                      @endforeach
                    </select>

                    </div>
                    <div class="col-md-3 form-group">
                      <label>Class<font style="color:red;">*</font></label>
                    <select class="form-control" id="class" name="class_id">
                      <option value="">Select Class</option>
                      @foreach($classes as $class)
                      <option value="{{$class->id}}" >{{$class->name}}</option>
                      @endforeach
                    </select>

                    </div>
                    <div class="col-md-3 form-group">
                      <button type="submit" id="click_me" name="search" class="btn btn-primary" style="margin-top: 14%;">Search</button>

                    </div>
                  </div>
               
              </div><br>
              <!-- /.card-header -->
             
              <!-- /.card-body -->
             <div class="row d-none" id="fee">
                    <div class="col-md-12">
                    <table class="table table-bordered table-striped dt-responsive dt-responsive" style="width: 100%;">
                      <thead>
                      
                        <th>SL</th>
                        <th>ID NO</th>
                        <th>Student Name</th>
                        <th>Roll</th>
                        <th>Registration Fee</th>
                        <th>Discount Amount</th>
                        <th>Fee (This student)</th>
                        <th>Action</th>
                       
                        
                                             
                      </thead>
                      <tbody id="fee-tr">
                        
                      </tbody>
                    </table>
                  </div>
                  </div>
            </div>

@endsection