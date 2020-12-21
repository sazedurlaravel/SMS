@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Student</h3>
              </div>
              <div class="card-body">
                <form action="{{route('students.class.year.search')}}" method="GET">
                  <div class="form-row">
                    <div class="col-md-3 form-group">
                      <label>Year<font style="color:red;">*</font></label>
                    <select class="form-control" name="year_id">
                      <option value="">Select Year</option>
                      @foreach($years as $year)
                      <option value="{{$year->id}}" {{(@$year_id==$year->id)? "selected":""}}>{{$year->name}}</option>
                      @endforeach
                    </select>

                    </div>
                    <div class="col-md-3 form-group">
                      <label>Class<font style="color:red;">*</font></label>
                    <select class="form-control" name="class_id">
                      <option value="">Select Class</option>
                      @foreach($classes as $class)
                      <option value="{{$class->id}}" {{(@$class_id==$class->id)? "selected":""}}>{{$class->name}}</option>
                      @endforeach
                    </select>

                    </div>
                    <div class="col-md-3 form-group">
                      <button type="submit" name="search" class="btn btn-primary" style="margin-top: 14%;">Search</button>

                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	@if(!@$search)
                <table id="example1" class="table table-sm table-bordered table-striped">
                	<a class="btn btn-success float-right" href="{{route('students.add')}}"><i class="fa fa-plus-circle mr-2"></i>Add Student</a>
				          <thead>
                  <tr>
                    <th>SL.No</th>
                    <th>Name</th>
                    <th>ID No</th>
                    <th>Roll</th>
                    <th>Year</th>
                    <th>Class</th>
                    <th>Image</th>
                    <th>Code</th>
                    
                   
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($allData as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value['student']['name']}}</td>
                    <td>{{$value['student']['id_no']}}</td>
                    <td>{{$value->roll}}</td>
                    <td>{{$value['year']['name']}}</td>
                    <td>{{$value['class']['name']}}</td>
                    <td> 
                      <img src="{{(!empty($value['student']['image']))? asset('backend/img/student/'.$value['student']['image']):asset('no_img.png')}}" id="showimg" style="width: 50px;height: 50px;">
                        </div></td>
                    <td>{{$value['student']['code']}}
                    </td>
                    
                    <td>
                    <a href="{{route('students.edit',$value->student_id)}}" class="btn btn-success"><i class='fa fa-edit'></i></a>
                    <a href="{{route('students.promotion',$value->student_id)}}" class="btn btn-primary"><i class='fa fa-check-circle'></i></a>
                     <a target="_blank" href="{{route('students.details',$value->student_id)}}" class="btn btn-info"><i class='fa fa-eye'></i></a>
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
                  <a class="btn btn-success float-right" href="{{route('students.add')}}"><i class="fa fa-plus-circle mr-2"></i>Add Student</a>
                  <thead>
                  <tr>
                    <th>SL.No</th>
                    <th>Name</th>
                    <th>ID No</th>
                    <th>Roll</th>
                    <th>Year</th>
                    <th>Class</th>
                    <th>Image</th>
                    <th>Code</th>
                    
                   
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($allData as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value['student']['name']}}</td>
                    <td>{{$value['student']['id_no']}}</td>
                    <td></td>
                    <td>{{$value['year']['name']}}</td>
                    <td>{{$value['class']['name']}}</td>
                    <td> 
                      <img src="{{(!empty($value['student']['image']))? asset('backend/img/student/'.$value['student']['image']):asset('no_img.png')}}" id="showimg" style="width: 50px;height: 50px;">
                        </div></td>
                    <td>{{$value['student']['code']}}
                    </td>
                    
                    <td>
                    <a href="{{route('students.promotion',$value->student_id)}}" class="btn btn-success"><i class='fa fa-edit'></i></a>
                    <a href="" class="btn btn-success"><i class='fa fa-tik'></i></a>
                     <a target="_blank" href="{{route('students.details',$value->student_id)}}" class="btn btn-info"><i class='fa fa-eye'></i></a>
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