@extends('backend.layouts.master')
@section('content')
 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Marks Details</h3><br>
                <h3>{{$allmarks['0']['exam_name']['name']}}</h3>
                <h4>Student Name:{{$allmarks['0']['student_name']['name']}}</h4>
                <h4>Student ID_NO:{{$allmarks['0']['student_name']['id_no']}}</h4>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                
                <table  class="table table-bordered table-striped">
                  
        <thead>
                  <tr>
                    <th>SL.No</th>
                    <th>Subject</th>
                    <th>Creative Q. Mark</th>
                    <th>MCQ Mark</th>
                    <th>Practical Mark</th>
                    <th>Attendence Mark</th>
                    <th>Total Marks</th>
                    <th>Grade Point</th>
                    <th>Grade Name</th>

                   
                  </tr>
                 
                  </thead>
                  <tbody>
                    @php
                    $sum =0;
                     $total_point = 0;
                    @endphp

                  @foreach($allmarks as $key=>$value)


                  
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value['subject']['name']}}</td>
                    <td>{{$value->cq_marks}}</td>
                    <td>{{$value->mcq_marks}}</td>
                    <td>{{$value->practical_marks}}</td>
                    <td>{{$value->class_attendence}}</td>
                    <td>{{$value->total_marks}}</td>
                    <td>{{number_format((float)$value->grade_point,2)}}</td>
                    @php
                     $subject_count = App\MarkEntry::where('year_id',$value->year_id)->where('class_id',$value->class_id)->where('exam_type_id',$value->exam_type_id)->where('student_id',$value->student_id)->get()->count();
                    @endphp
                    <td>{{$value->grade_id}}</td>
                    
                  </tr>

                  @php
                  $sum +=$value->total_marks;
                   $total_point +=number_format((float)$value->grade_point,2);
                   $avarage_point = (float)$total_point/(int)$subject_count;
                 
                  @endphp
                 
                  @endforeach

                    <tr>
                    <th colspan="6" style="text-align: center;"><strong>Total</strong></th>
                    <td>{{$sum}}</td>
                    <td>{{number_format((float)$avarage_point,2)}}</td>
                    <td></td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection