@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Exam Fee Manage</h3>
              </div>
              <div class="card-body">
                
                  <div class="form-row">
                    <div class="col-md-3 form-group">
                      <label>Year<font style="color:red;">*</font></label>
                    <select class="form-control" id="year" name="year_id">
                      <option value="">Select Year</option>
                      @foreach($years as $year)
                      <option value="{{$year->id}}" >{{$year->name}}</option>
                      @endforeach
                    </select>

                    </div>
                    <div class="col-md-3 form-group">
                      <label>Class<font style="color:red;">*</font></label>
                    <select class="form-control" id="class" name="class_id">
                      <option value="">Select Class</option>
                      @foreach($classes as $class)
                      <option value="{{$class->id}}" >{{$class->name}}</option>
                      @endforeach
                    </select>

                    </div>
                    <div class="col-md-3 form-group">
                      <label>ExamType<font style="color:red;">*</font></label>
                    <select class="form-control" id="exam_type_id" name="exam_type_id">
                      <option value="">Select Exam</option>
                     @foreach($examType as $exam)
                     <option value="{{$exam->id}}">{{$exam->name}}</option>
                     @endforeach
                      
                    </select>

                    </div>
                    <div class="col-md-3 form-group">
                      <button type="submit" id="click_me" name="search" class="btn btn-primary" style="margin-top: 14%;">Search</button>

                    </div>
                  </div>
               
              </div><br>
              <!-- /.card-header -->
             
              <!-- /.card-body -->

              <div class="card-body">
                <div class="row d-none" id="fee">
              <div class="col-md-12">
                <table  class="table table-bordered table-striped">
                 
                  <thead>
                  <tr>
                   <th>SL</th>
                  <th>ID NO</th>
                  <th>Student Name</th>
                  <th>Roll</th>
                  <th>Exam Fee</th>
                  <th>Discount Amount</th>
                  <th>Fee (This student)</th>
                  <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="exam_fee-tr">
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    
                  </tr>
                  </tfoot>
                </table>
                  </div>
                  </div>
              </div>
             
            </div>



@endsection

@section('scripts')
  <!-- Ajax for Exam Fee -->
<script type="text/javascript">
  $(document).on('click','#click_me',function(){
    var year_id = $('#year').val();
    
    var class_id = $('#class').val();
    $('.notifyjs-corner').html('');

     var exam_type_id = $('#exam_type_id').val();
    $('.notifyjs-corner').html('');

    if (year_id == '') {
      $.notify('Year Required',{globalPosition:'top right',className: 'error'});
    }
     if (class_id == '') {
      $.notify('Class Required',{globalPosition:'top right',className: 'error'});
    }
    if (exam_type_id == '') {
      $.notify('ExamType Required',{globalPosition:'top right',className: 'error'});
    }
    $.ajax({
      url:"{{route('students.exam.fee')}}",
      type:"get",
      data:{'year_id':year_id,'class_id':class_id,'exam_type_id':exam_type_id},
      beforeSend:function(){

      },
      success:function(data){
        $('#fee').removeClass('d-none');
        $('#exam_fee-tr').html(data);
      }
     
    });
  });

</script>

@endsection