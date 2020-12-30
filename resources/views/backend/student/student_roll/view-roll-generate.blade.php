@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Roll Generate</h3>
              </div>
              <div class="card-body">
                <form action="{{route('students.roll.store')}}" method="POST">
                  @csrf
                  <div class="form-row">
                    <div class="col-md-3 form-group">
                      <label>Year<font style="color:red;">*</font></label>
                    <select class="form-control" id="year_id" name="year_id">
                      <option value="">Select Year</option>
                      @foreach($years as $year)
                      <option value="{{$year->id}}">{{$year->name}}</option>
                      @endforeach
                    </select>

                    </div>
                    <div class="col-md-3 form-group">
                      <label>Class<font style="color:red;">*</font></label>
                    <select class="form-control" id="class_id" name="class_id">
                      <option value="">Select Class</option>
                      @foreach($classes as $class)
                      <option value="{{$class->id}}">{{$class->name}}</option>
                      @endforeach
                    </select>

                    </div>
                    <div class="col-md-3 form-group">
                      <a name="search" id="search" class="btn btn-primary" style="margin-top: 14%;">Search</a>

                    </div>
                  </div><br>
                  <div class="row d-none" id="roll-generate">
                    <div class="col-md-12">
                    <table class="table table-bordered table-striped dt-responsive dt-responsive" style="width: 100%;">
                      <thead>
                        <tr>
                          <th>ID NO.</th>
                          <th>Student Name</th>
                          <th>Father's Name</th>
                          <th>Gender</th>
                          <th>Roll No.</th>
                         
                        </tr>
                      </thead>
                      <tbody id="roll-generate-tr">
                        
                      </tbody>
                    </table>
                  </div>
                  </div>
                  
                  <button type="submit" class="btn btn-success">Roll Generate</button>
                </form>
              </div>
             
              <!-- /.card-body -->
            </div>

@endsection

@section('scripts')
  <!-- Ajax for roll generate -->
<script type="text/javascript">
  $(document).on('click','#search',function(){
    var year_id = $('#year_id').val();
    
    var class_id = $('#class_id').val();
    $('.notifyjs-corner').html('');

    if (year_id == '') {
      $.notify('Year Required',{globalPosition:'top right',className: 'error'});
    }
     if (class_id == '') {
      $.notify('Class Required',{globalPosition:'top right',className: 'error'});
    }
    $.ajax({
      url:"{{route('students.get_student')}}",
      type:"GET",
      data:{'year_id':year_id,'class_id':class_id},
      success:function(data){
        
        $('#roll-generate').removeClass('d-none');
        var html='';
        $.each(data,function(key,v){
          html +=
          '<tr>'+
          '<td>'+v.student.id_no+'<input type="hidden" name="student_id[]" value="'+v.student_id+'"></td>'+
           '<td>'+v.student.name+'</td>'+
           '<td>'+v.student.fname+'</td>'+
           '<td>'+v.student.gender+'</td>'+
           '<td><input type="text" class="form-control" name="roll[]" value="'+v.roll+'" ></td>'+
           '</tr>';
        });
        console.log(html)
        html=$('#roll-generate-tr').html(html);
      }
    });
  });

</script>
@endsection