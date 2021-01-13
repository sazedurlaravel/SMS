@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Student</h3>
              </div>
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-sm table-bordered table-striped">
                  
                  <thead>
                  <tr>
                    <th>SL.No</th>
                    <th>Name</th>
                    <th>ID No</th>
                    <th>Year</th>
                    <th>Class</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($allData as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value['student_name']['name']}}</td>
                    <td>{{$value->id_no}}</td>
                    
                    <td>{{$value['year_name']['name']}}</td>
                    <td>{{$value['class_name']['name']}}</td>
                    

                    <td>
                    <a href="" class="btn btn-success"><i class='fa fa-edit'></i></a>
                  
                     <a target="_blank" href="{{route('marks.details',$value->student_id)}}" class="btn btn-info"><i class='fa fa-eye'></i></a>
                    </td>
                  </tr>
                  @endforeach
                 
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

