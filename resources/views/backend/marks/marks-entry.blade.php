@extends('backend.layouts.master')

@section('content')

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Marks Entry</h3>
              </div>
              <div class="card-body">
                <form action="{{route('marks.store')}}" method="POST">
                  @csrf
                  <div class="form-row">
                    <div class="col-md-2 form-group">
                      <label>Year<font style="color:red;">*</font></label>
                    <select class="form-control" id="year_id" name="year_id">
                      <option value="">Select Year</option>
                      @foreach($years as $year)
                      <option value="{{$year->id}}">{{$year->name}}</option>
                      @endforeach
                    </select>

                    </div>
                    <div class="col-md-2 form-group">
                      <label>Class<font style="color:red;">*</font></label>
                    <select class="form-control" id="class_id" name="class_id">
                      <option value="">Select Class</option>
                      @foreach($classes as $class)
                      <option value="{{$class->id}}">{{$class->name}}</option>
                      @endforeach
                    </select>

                    </div>
                     <div class="col-md-3 form-group">
                      <label>Assign Subject<font style="color:red;">*</font></label>
                    <select class="form-control" id="assign_subject_id" name="assign_subject_id">
                      <option value="">Select Subject</option>
                      
                    </select>

                    </div>
                     <div class="col-md-3 form-group">
                      <label>Exam Type<font style="color:red;">*</font></label>
                    <select class="form-control" id="exam_type_id" name="exam_type_id">
                      <option value="">Select Exam</option>
                      @foreach($exams as $exam)
                      <option value="{{$exam->id}}">{{$exam->name}}</option>
                      @endforeach
                    </select>

                    </div>
                    <div class="col-md-2 form-group">
                      <a name="search" id="search" class="btn btn-primary" style="margin-top: 28%;">Search</a>

                    </div>
                  </div><br>
                  <div class="row d-none" id="marks">
                    <div class="col-md-12">
                    <table class="table table-bordered table-striped dt-responsive dt-responsive" style="width: 100%;">
                      <thead>
                        <tr>
                          <th>ID NO.</th>
                          <th>Student Name</th>
                          <th>Father's Name</th>
                          <th>Gender</th>
                          <th>Marks.</th>
                         
                        </tr>
                      </thead>
                      <tbody id="marks-entry-tr">
                        
                      </tbody>
                    </table>
                  </div>
                   <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                  
                 
                </form>
              </div>
             
              <!-- /.card-body -->
            </div>

@endsection

@section('scripts')
	<script type="text/javascript">
		$(function(){
			$(document).on('change','#class_id',function(){
				var class_id = $('#class_id').val();
				$.ajax({
					url:"{{route('marks.get-subject')}}",
					type:"GET",
					data:{class_id:class_id},
					success:function(data){
						var html = '<option value="">Select Subject </option>';	
						$.each(data,function(key,v){
							html +='<option value="'+v.id+'">'+v.subject_name.name+'</option>';
						});
						$('#assign_subject_id').html(html);
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
  $(document).on('click','#search',function(){
    var year_id = $('#year_id').val();
    
    var class_id = $('#class_id').val();
    $('.notifyjs-corner').html('');

     var assign_subject_id = $('#assign_subject_id').val();
    $('.notifyjs-corner').html('');
    var exam_type_id = $('#exam_type_id').val();
    $('.notifyjs-corner').html('');

    if (year_id == '') {
      $.notify('Year Required',{globalPosition:'top right',className: 'error'});
    }
     if (class_id == '') {
      $.notify('Class Required',{globalPosition:'top right',className: 'error'});
    }
    if (assign_subject_id == '') {
      $.notify('Subject Required',{globalPosition:'top right',className: 'error'});
    }
    if (exam_type_id == '') {
      $.notify('Exam Name Required',{globalPosition:'top right',className: 'error'});
    }
    $.ajax({
      url:"{{route('marks.get-student')}}",
      type:"get",
      data:{'year_id':year_id,'class_id':class_id,'assign_subject_id':assign_subject_id,'exam_type_id':exam_type_id},
     
      success:function(data){
        $('#marks').removeClass('d-none');
         var html='';
        $.each(data,function(key,v){
          html +=
          '<tr>'+
          '<td>'+v.student.id_no+'<input type="hidden" name="student_id[]" value="'+v.student_id+'"><input type="hidden" name="id_no[]" value="'+v.student.id_no+'"></td>'+
           '<td>'+v.student.name+'</td>'+
           '<td>'+v.student.fname+'</td>'+
           '<td>'+v.student.gender+'</td>'+
           '<td><input type="text" class="form-control" name="marks[]" value="'+v.marks+'" ></td>'+
           '</tr>';
        });
        $('#marks-entry-tr').html(html);
      }
     
    });
  });

</script>
@endsection