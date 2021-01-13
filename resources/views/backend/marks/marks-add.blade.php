@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Marks Entry</h3>
              </div>
              <div class="card-body">
                <form action="{{route('marks.get.student')}}" method="GET">
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
                      <label>Class<font style="color:red;">*</font></label>
                    <select name="exam_type_id" class="form-control-sm">
                       <option value="">Select Exam</option>
                       @foreach($exams as $exam)
                        <option value="{{$exam->id}}">{{$exam->name}}</option>
                       @endforeach
                     </select>

                    </div>
                     <div class="col-md-3 form-group">
                      <label>Subject<font style="color:red;">*</font></label>
                    <select class="form-control" id="subject_id" name="subject_id">
                      <option value="">Select Subject</option>
                      @foreach($subjects as $sub)
                      <option value="{{$sub->id}}">{{$sub->name}}</option>
                      @endforeach
                      
                    </select>

                    </div>
                     
                    
                    <div class="col-md-2 form-group">
                      <button name="search" type="submit" id="search" class="btn btn-primary" style="margin-top: 28%;">Search</button>

                    </div>
                  </div>
                 
                </form>
              </div>
             
              <!-- /.card-body -->
            </div>

@endsection