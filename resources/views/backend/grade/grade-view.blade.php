@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Grade View</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                  <a class="btn btn-success float-right" href="{{route('grade.add')}}"><i class="fa fa-plus-circle mr-2"></i>Add Grade Point</a>
        <thead>
                  <tr>
                    <th>SL.No</th>
                    <th>Grade Name</th>
                    <th>Range</th>
                    <th>Grade Point</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($allData as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value->grade_name}}</td>
                    <td>{{$value->start_marks}}-{{$value->end_marks}}</td>
                    <td>{{$value->grade_point}}</td>
                    
                    <td>
                    <a href="" class="btn btn-success"><i class='fa fa-edit'></i></a>
                    <a href="" class="btn btn-danger"><i class='fa fa-trash'></i></a>
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