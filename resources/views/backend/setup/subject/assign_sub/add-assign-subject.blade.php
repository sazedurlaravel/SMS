@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Add Assign Subject
                </h3>
                <a class="btn btn-success float-right" href="{{route('assign.subject.view')}}"><i class="fa fa-list mr-2"></i>View Assign Subject</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                	
				           <form action="{{route('assign.subject.store')}}" method="POST">
                    @csrf
                    <div class="add_item">
                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <label>Class</label>
                         <select name="class_id"  class="form-control">
                           <option value="">Select Class</option>
                           @foreach($classes as $value)
                           <option value="{{$value->id}}">{{$value->name}}</option>
                           @endforeach
                         </select>
                         
                        </div>
                      </div> 
                      <div class="form-row">
                        <div class="col-md-3 form-group">
                           <label>Subject</label>
                         <select name="subject_id[]" class="form-control">
                           <option value="">Select Subject</option>
                           @foreach($subjects as $value)
                           <option value="{{$value->id}}">{{$value->name}}</option>
                           @endforeach
                         </select>
                        </div>
                        <div class="col-md-2 form-group">
                          <label>Full Mark</label>
                          <input class="form-control" type="text" name="full_mark[]" placeholder="Enter Mark">
                        </div>
                        <div class="col-md-2 form-group">
                          <label>Pass Mark</label>
                          <input class="form-control" type="text" name="pass_mark[]" placeholder="Enter Mark">
                        </div>
                        <div class="col-md-2 form-group">
                          <label>Sub. Mark</label>
                          <input class="form-control" type="text" name="subjective_mark[]" placeholder="Subjective Mark">
                        </div>
                         <div class="col-md-2 form-group">
                          <span class="btn btn-success addevent" style="margin-top: 21%;"><i class="fa fa-plus"></i></span>
                        </div>
                      </div> 
                    </div>
                      <div class="form-row">
                         <div class="col-md-6 form-group">
                          <button type="submit" class="btn btn-success">
                            Submit
                        </button>
                        </div>
                      </div>    
                   </form>
               
              </div>
              <!-- /.card-body -->
            </div>

            <div style="visibility: hidden;">
              <div class="extra_item_add" id="extra_item_add">
                <div class="extra_item_remove" id="extra_item_remove">
                  <div class="form-row">
                        <div class="col-md-3 form-group">
                           <label>Subject</label>
                         <select name="subject_id[]" class="form-control">
                           <option value="">Select Subject</option>
                           @foreach($subjects as $value)
                           <option value="{{$value->id}}">{{$value->name}}</option>
                           @endforeach
                         </select>

                        </div>
                         
                        <div class="col-md-2 form-group">
                          <label>Full Mark</label>
                          <input class="form-control" type="text" name="full_mark[]" placeholder="Enter Mark">
                        </div>
                        <div class="col-md-2 form-group">
                          <label>Pass Mark</label>
                          <input class="form-control" type="text" name="pass_mark[]" placeholder="Enter Mark">
                        </div>
                        <div class="col-md-2 form-group">
                          <label>Sub. Mark</label>
                          <input class="form-control" type="text" name="subjective_mark[]" placeholder="Subjective Mark">
                        </div>
                         <div class="col-md-2 form-group">
                          <span class="btn btn-success addevent" style="margin-top: 21%;"><i class="fa fa-plus"></i></span>
                          <span class="btn btn-danger removeevent" style="margin-top: 21%;"><i class="fa fa-minus"></i></span>
                        </div>
                      </div> 
                </div>
              </div>
            </div>

           

@endsection