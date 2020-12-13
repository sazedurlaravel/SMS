@extends('backend.layouts.master')
@section('content')
 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fee Amount Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                  <a class="btn btn-success float-right" href="{{route('fee.amount.view')}}"><i class="fa fa-list mr-2"></i>Fee List</a>
        <thead>
                  <tr>
                    <th>SL.No</th>
                    <th>Class</th>
                    <th>Amount</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($editData as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value['class']['name']}}</td>
                    <td>{{$value->amount}}</td>
                    
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