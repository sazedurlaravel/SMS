@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fee Amount List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	
                <table id="example1" class="table table-bordered table-striped">
                	<a class="btn btn-success float-right" href="{{route('fee.amount.add')}}"><i class="fa fa-plus-circle mr-2"></i>Add Amount</a>
				<thead>
                  <tr>
                    <th>SL.No</th>
                    <th>Fee Category Id</th>
                   
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($allData as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value['fee_category']['name']}}</td>
                    
                    <td>
                    <a href="{{route('fee.amount.details',$value->fee_category_id)}}" class="btn btn-success"><i class='fa fa-eye'></i></a>
                    <a href="{{route('fee.amount.edit',$value->fee_category_id)}}" class="btn btn-primary"><i class='fa fa-edit'></i></a>
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