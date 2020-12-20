$(document).ready(function(){
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
          '<td>'+v.student.id_no+'<input type="hidden" name="student_id[]" value="'+v.student_id+'" ></td>'+
           '<td>'+v.student.name+'</td>'+
           '<td>'+v.student.fname+'</td>'+
           '<td>'+v.student.gender+'</td>'+
           '<td><input type="text" class="form-control" name="roll[]" value="'+v.roll+'" ></td>'+
           '</tr>';
        });
        html=$('#roll-generate-tr').html(html);
      }
    });
  });


})
  