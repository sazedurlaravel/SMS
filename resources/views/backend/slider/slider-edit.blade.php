@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                @if(isset($editData))
                  Edit Slider
                  @else
                  Add Slider
                  @endif
                </h3>
                <a class="btn btn-success float-right" href="{{route('slider.view')}}"><i class="fa fa-list mr-2"></i>View Slider</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              	
                <table id="example1" class="table table-bordered table-striped">
                	
				<form action="{{route('slider.update',$editData->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="form-row">
                        <div class="col-md-6 form-group">
                          
                        <input class="form-control" id="image" type="file" name="image" >
                       
                        </div>
                        <div class="col-md-6 form-group">
                          <img src="{{(!empty($editData->image))? asset('backend/img/slider/'.$editData->image):asset('no_img.png')}}" id="showimg" style="width: 100px;height: 100px;margin-left: 72px;">
                        </div>
                        <div class="col-md-6 form-group">
                          <button type="submit" class="btn btn-success">
                          @if(isset($editData))
                            Update
                            @else
                            Save
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