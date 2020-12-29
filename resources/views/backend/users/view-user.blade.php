@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	
                <table id="example1" class="table table-bordered table-striped">
                	<a class="btn btn-success float-right" href="{{route('users.add')}}"><i class="fa fa-plus-circle mr-2"></i>Add User</a>
				<thead>
                  <tr>
                    <th>SL.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Code</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($allData as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->role}}</td>
                    <td>{{$value->code}}</td>
                    <td>
                        <form action="{{route('users.status',$value->id)}}" method="POST">
                          @csrf
                         
                        @if($value->status == '1')
                        <button  type="submit" class="btn btn-sm btn-info">active</button>
                        @else
                        <button  type="submit" class="btn btn-sm btn-warning">deactive</button>
                        @endif
                        </form>
                       
                      </td>
                    <td>
                    <a href="{{route('users.edit',$value->id)}}" class="btn btn-success"><i class='fa fa-edit'></i></a>
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