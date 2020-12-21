@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Increment Salary                
                </h3>
                <a class="btn btn-success float-right" href="{{route('employee.view')}}"><i class="fa fa-list mr-2"></i>Employee List</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              	
                <table id="example1" class="table table-bordered table-striped">
                	
				           <form action="{{route('employee.salary.store',$editData->id)}}" method="POST"  > 
                    @csrf
                      <div class="form-row">
                        <div class="col-md-4 form-group">
                        <label>Salary Amount</label>
                        <input class="form-control" type="text" name="increment_salary" placeholder="Enter Salary Amount">
                       
                        </div>
                        <div class="col-md-4 form-group">
                        <label>Effective Date</label>
                        <input class="form-control" type="date" name="effected_date">
                       
                        </div>

                         <div class="col-md-4 form-group">

                          <button type="submit" class="btn btn-success" style="margin-top: 10%;">
                            @if(isset($editData))
                            Update
                            @else
                            Submit
                            @endif
                        </button>
                        </div>
                       
                        </div>
                        
                   </form>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection