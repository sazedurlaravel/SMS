@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Monthly Fee Manage</h3>
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
                      <label>Month<font style="color:red;">*</font></label>
                    <select class="form-control" id="month" name="month">
                      <option value="">Select Month</option>
                      <option value="January" >January</option>
                      <option value="February" >February</option>
                      <option value="March" >March</option>
                      <option value="April" >April</option>
                      <option value="May" >May</option>
                      <option value="Jun" >Jun</option>
                      <option value="July" >July</option>
                      <option value="Agust" >Agust</option>
                      <option value="September" >September</option>
                      <option value="Octobar" >Octobar</option>
                      <option value="November" >November</option>
                      <option value="Decembar" >Decembar</option>
                      
                    </select>

                    </div>
                    <div class="col-md-3 form-group">
                      <button type="submit" id="click_me" name="search" class="btn btn-primary" style="margin-top: 14%;">Search</button>

                    </div>
                  </div>
               
              </div><br>
              <!-- /.card-header -->
             
              <!-- /.card-body -->

              <div class="card-body">
                <div class="row d-none" id="fee">
              <div class="col-md-12">
                <table  class="table table-bordered table-striped">
                 
                  <thead>
                  <tr>
                   <th>SL</th>
                  <th>ID NO</th>
                  <th>Student Name</th>
                  <th>Roll</th>
                  <th>Monthly Fee</th>
                  <th>Discount Amount</th>
                  <th>Fee (This student)</th>
                  <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="monthly_fee-tr">
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    
                  </tr>
                  </tfoot>
                </table>
                  </div>
                  </div>
              </div>
             
            </div>

@endsection