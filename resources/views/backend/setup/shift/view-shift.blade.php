@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Shift</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	
                <table id="example1" class="table table-bordered table-striped">
                	<a class="btn btn-success float-right" href="{{route('setups.shift.add')}}"><i class="fa fa-plus-circle mr-2"></i>Add Shift</a>
				<thead>
                  <tr>
                    <th>SL.No</th>
                    <th>Name</th>
                   
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($allData as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value->name}}</td>
                    
                    <td>
                    <a href="{{route('setups.shift.edit',$value->id)}}" class="btn btn-success"><i class='fa fa-edit'></i></a>
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