@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Student</h3>
              </div>
              <div class="card-body">
                <form action="{{route('students.roll.store')}}" method="POST">
                  @csrf
                  <div class="form-row">
                    <div class="col-md-3 form-group">
                      <label>Year<font style="color:red;">*</font></label>
                    <select class="form-control" id="year_id" name="year_id">
                      <option value="">Select Year</option>
                      @foreach($years as $year)
                      <option value="{{$year->id}}">{{$year->name}}</option>
                      @endforeach
                    </select>

                    </div>
                    <div class="col-md-3 form-group">
                      <label>Class<font style="color:red;">*</font></label>
                    <select class="form-control" id="class_id" name="class_id">
                      <option value="">Select Class</option>
                      @foreach($classes as $class)
                      <option value="{{$class->id}}">{{$class->name}}</option>
                      @endforeach
                    </select>

                    </div>
                    <div class="col-md-3 form-group">
                      <a name="search" id="search" class="btn btn-primary" style="margin-top: 14%;">Search</a>

                    </div>
                  </div><br>
                  <div class="row d-none" id="roll-generate">
                    <div class="col-md-12">
                    <table class="table table-bordered table-striped dt-responsive dt-responsive" style="width: 100%;">
                      <thead>
                        <tr>
                          <th>ID NO.</th>
                          <th>Student Name</th>
                          <th>Father's Name</th>
                          <th>Gender</th>
                          <th>Roll No.</th>
                         
                        </tr>
                      </thead>
                      <tbody id="roll-generate-tr">
                        
                      </tbody>
                    </table>
                  </div>
                  </div>
                  
                  <button type="submit" class="btn btn-success">Roll Generate</button>
                </form>
              </div>
             
              <!-- /.card-body -->
            </div>

@endsection