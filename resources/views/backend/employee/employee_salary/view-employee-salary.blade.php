@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Employee List</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              	@if(!@$search)
                <table id="example1" class="table table-sm table-bordered table-striped">
                	<a class="btn btn-success float-right" href="{{route('employee.add')}}"><i class="fa fa-plus-circle mr-2"></i>Add Employee</a>
				          <thead>
                  <tr>
                    <th>SL.No</th>
                    <th>ID No</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Join Date</th>
                    <th>Salary</th>
                    <th>Code</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($allData as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value->id_no}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->mobile}}</td>
                    <td>{{$value->join_date}}</td>
                    <td>{{$value->salary}}</td>
                    <td>{{$value->code}}</td>
                    <td> 
                      <img src="{{(!empty($value->image))? asset('backend/img/employee/'.$value->image):asset('no_img.png')}}" id="showimg" style="width: 50px;height: 50px;">
                        </div></td>
                    
                    </td>
                    
                    <td>
                    <a href="{{route('employee.salary.increment',$value->id)}}" class="btn btn-sm btn-success"><i class='fa fa-plus'></i></a>
                    
                     <a target="_blank" href="{{route('employee.salary.details',$value->id)}}" class="btn btn-sm btn-info"><i class='fa fa-eye'></i></a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    
                  </tr>
                  </tfoot>
                </table>
                @else

                <table id="example1" class="table table-sm table-bordered table-striped">
                  <a class="btn btn-success float-right" href="{{route('employee.add')}}"><i class="fa fa-plus-circle mr-2"></i>Add Employee</a>
                  <thead>
                  <tr>
                    <th>SL.No</th>
                    <th>ID No</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Join Date</th>
                    <th>Salary</th>
                    <th>Code</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($allData as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value->id_no}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->mobile}}</td>
                    <td>{{$value->address}}</td>
                    <td>{{$value->gender}}</td>
                    <td>{{$value->join_date}}</td>
                    <td>{{$value->salary}}</td>
                    <td>{{$value->code}}</td>
                    <td> 
                      <img src="{{(!empty($value->image))? asset('backend/img/employee/'.$value->image):asset('no_img.png')}}" id="showimg" style="width: 50px;height: 50px;">
                        </div></td>
                    
                    </td>
                    
                    <td>
                    <a href="{{route('employee.edit',$value->id)}}" class="btn btn-sm btn-success"><i class='fa fa-edit'></i></a>
                    
                     <a target="_blank" href="te('employee.details',$value->id)}}" class="btn btn-sm btn-info"><i class='fa fa-eye'></i></a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    
                  </tr>
                  </tfoot>
                </table>

                @endif

              </div>
              <!-- /.card-body -->
            </div>

@endsection