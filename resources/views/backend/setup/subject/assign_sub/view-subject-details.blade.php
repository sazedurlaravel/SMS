@extends('backend.layouts.master')
@section('content')
 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Subject Details</h3>
                <a class="btn btn-success float-right" href="{{route('assign.subject.view')}}"><i class="fa fa-list mr-2"></i>Return List</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table  class="table table-bordered table-striped">
                  
        <thead>
                  <tr>
                    <th>SL.No</th>
                    <th>Subject</th>
                    <th>Full Mark</th>
                    <th>Pass Mark</th>
                    <th>Subjective Mark</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($editData as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value['subject_name']['name']}}</td>
                    <td>{{$value->full_mark}}</td>
                    <td>{{$value->pass_mark}}</td>
                    <td>{{$value->subjective_mark}}</td>
                    
                    
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