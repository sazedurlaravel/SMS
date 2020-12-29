@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Salary Increment Details</h3>
                  <a class="btn btn-success float-right" href="{{route('employee.salary.view')}}"><i class="fa fa-list mr-2"></i>View Salary List</a>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <p><strong>Name:</strong>{{$details->name}}</p>
              <p><strong>ID NO:</strong>{{$details->id_no}}</p>
                <table id="example1" class="table table-sm table-bordered table-striped">

                  
                  <thead>
                  <tr>
                    <th>SL. NO</th>
                    <th>Previous Salary</th>
                    <th>Increment Salary</th>
                    <th>Present Salary</th>
                    <th>Effected Date</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($salary_log as $key => $value)
                    <tr>
                      @if($key == "0")
                      <td colspan="5" style="text-align: center;">Joining Salary: {{$value->previous_salary}} TK</td>
                      @else
                      <td>{{$key+1}}</td>
                      <td>{{$value->previous_salary}} TK</td>
                      <td>{{$value->increment_salary}} TK</td>
                      <td>{{$value->present_salary}} TK</td>
                      <td>{{date('d-m-Y',strtotime($value->effected_date))}} </td>
                    @endif
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