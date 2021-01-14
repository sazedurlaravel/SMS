@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Result</h3>
              </div>
              <div class="card-body">
                <form action="{{route('get.result.view')}}" method="GET">
                  @csrf
                  <div class="form-row">
                    <div class="col-md-2 form-group">
                      <label>Year<font style="color:red;">*</font></label>
                    <select class="form-control" id="year_id" name="year_id">
                      <option value="">Select Year</option>
                      @foreach($years as $year)
                      <option value="{{$year->id}}">{{$year->name}}</option>
                      @endforeach
                    </select>

                    </div>
                    <div class="col-md-2 form-group">
                      <label>Class<font style="color:red;">*</font></label>
                    <select class="form-control" id="class_id" name="class_id">
                      <option value="">Select Class</option>
                      @foreach($classes as $class)
                      <option value="{{$class->id}}">{{$class->name}}</option>
                      @endforeach
                    </select>

                    </div>
                     <div class="col-md-2 form-group">
                      <label>Examtype<font style="color:red;">*</font></label>
                    <select name="exam_type_id" class="form-control">
                       <option value="">Select Exam</option>
                       @foreach($exams as $exam)
                        <option value="{{$exam->id}}">{{$exam->name}}</option>
                       @endforeach
                     </select>

                    </div>
                     <div class="col-md-3 form-group">
                      <label>ID NO<font style="color:red;">*</font></label>
                        <input class="form-control" type="text" name="id_no" placeholder="ID NO">

                    </div>
                     
                    
                    <div class="col-md-2 form-group">
                      <button name="search" type="submit" id="search" class="btn btn-primary" style="margin-top: 25%;">Search</button>

                    </div>
                  </div>
                 
                </form>
              </div>
             
              <!-- /.card-body -->
            </div>

@endsection