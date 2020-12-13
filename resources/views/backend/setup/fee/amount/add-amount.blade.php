@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Add Fee Amount
                </h3>
                <a class="btn btn-success float-right" href="{{route('fee.amount.view')}}"><i class="fa fa-list mr-2"></i>View FeeAmount</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                	
				           <form action="{{route('fee.amount.store')}}" method="POST">
                    @csrf
                    <div class="add_item">
                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <label>FeeCategory</label>
                         <select name="fee_category_id" class="form-control">
                           <option value="">Select FeeCategory</option>
                           @foreach($feeCategories as $value)
                           <option value="{{$value->id}}">{{$value->name}}</option>
                           @endforeach
                         </select>
                        </div>
                      </div> 
                      <div class="form-row">
                        <div class="col-md-5 form-group">
                           <label>Class</label>
                         <select name="class_id[]" class="form-control">
                           <option value="">Select Class</option>
                           @foreach($classes as $value)
                           <option value="{{$value->id}}">{{$value->name}}</option>
                           @endforeach
                         </select>
                        </div>
                        <div class="col-md-5 form-group">
                          <label>Amount</label>
                          <input class="form-control" type="text" name="amount[]" placeholder="Enter Amount">
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
                        <div class="col-md-5 form-group">
                           <label>Class</label>
                         <select name="class_id[]" class="form-control">
                           <option value="">Select Class</option>
                           @foreach($classes as $value)
                           <option value="{{$value->id}}">{{$value->name}}</option>
                           @endforeach
                         </select>
                        </div>
                        <div class="col-md-5 form-group">
                          <label>Amount</label>
                          <input class="form-control" type="text" name="amount[]" placeholder="Enter Amount">
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