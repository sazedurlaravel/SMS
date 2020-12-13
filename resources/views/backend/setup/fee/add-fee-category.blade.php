@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  @if(isset($editData))
                  Edit FeeCategory
                  @else
                  Add FeeCategory
                  @endif


                </h3>
                <a class="btn btn-success float-right" href="{{route('fee.category.view')}}"><i class="fa fa-list mr-2"></i>View FeeCategory</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              	
                <table id="example1" class="table table-bordered table-striped">
                	
				           <form action="{{(@$editData)? route('fee.category.update',$editData->id):route('fee.category.store')}}" method="POST">
                    @csrf
                      <div class="form-row">
                        <div class="col-md-6 form-group">
                          
                        <input class="form-control" type="text" name="name" placeholder="Enter FeeCategory Name" value="{{(@$editData)?$editData->name:""}}">
                        @error('name')
                        <div class="alert" style="color: red;">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-6 form-group">
                          <button type="submit" class="btn btn-success">
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