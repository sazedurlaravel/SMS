@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Student</h3>
              </div>
             
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('marks.store')}}" method="POST">
                  @csrf

                  <input type="hidden" name="year_id" value="{{$year}}">
                  <input type="hidden" name="class_id" value="{{$class}}">
                  <input type="hidden" name="exam_type_id" value="{{$examType}}">
                  <input type="hidden" name="subject_id" value="{{$subject}}">
                  <table id="example1" class="table table-sm table-bordered table-striped">
                
                  <thead>
                  <tr>
                    <th>SL.No</th>
                    <th>Name</th>
                    <th>ID No</th> 
                    <th>Creative Q. Mark</th>
                    <th>MCQ Mark</th>
                    <th>Practical Mark</th>
                    <th>Class Attendence Mark</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($allData as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value['student']['name']}}<input type="hidden" name="student_id[]" value="{{$value->student_id}}"></td>
                    <td>{{$value['student']['id_no']}}<input type="hidden" name="id_no[]" value="{{$value['student']['id_no']}}"></td>
                   
                    <td><input type="text" name="cq_marks[]" class="form-control"></td>
                    <td><input type="text" name="mcq_marks[]" class="form-control"></td>
                    <td><input type="text" name="practical_marks[]" class="form-control"></td>
                    <td><input type="text" name="class_attendence[]" class="form-control"></td>
                  
                   
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    
                  </tr>
                  </tfoot>
                </table>

              <button type="submit" class="btn btn-success">Marks Entry</button>
                </form>
              
            </div>
              <!-- /.card-body -->
            </div>

@endsection