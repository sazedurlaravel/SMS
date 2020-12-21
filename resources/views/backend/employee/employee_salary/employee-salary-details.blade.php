@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Salary Increment Details</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <p><strong>Name:</strong>{{$details->name}}</p>
              <p><strong>ID NO:</strong>{{$details->id_no}}</p>
                <table id="example1" class="table table-sm table-bordered table-striped">
                  
                  <thead>
                  <tr>
                  
                    <th>Previous Salary</th>
                    <th>Increment Salary</th>
                    <th>Present Salary</th>
                    <th>Effected Date</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($salary_log as $value)
                    <tr>
                    
                      <td>{{$value->previous_salary}}</td>
                      <td>{{$value->increment_salary}}</td>
                      <td>{{$value->present_salary}}</td>
                      <td>{{$value->effected_date}}</td>
                    
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