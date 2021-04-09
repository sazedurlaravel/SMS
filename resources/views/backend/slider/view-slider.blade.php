@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Slider</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	
                <table id="example1" class="table table-bordered table-striped">
                	<a class="btn btn-success float-right" href="{{route('slider.create')}}"><i class="fa fa-plus-circle mr-2"></i>Add Slider</a>
				<thead>
                  <tr>
                    <th>SL.No</th>
                    <th>Name</th>
                   
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($sliders as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>
                        <img src="{{asset('backend/img/slider/'.$value->image)}}" width="50" alt="">
                    </td>
                    
                    <td>
                    <a href="{{route('slider.edit',$value->id)}}" class="btn btn-success"><i class='fa fa-edit'></i></a>
                    <a href="{{route('slider.delete',$value->id)}}" class="btn btn-danger"><i class='fa fa-trash'></i></a>
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