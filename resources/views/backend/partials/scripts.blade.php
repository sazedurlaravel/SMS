<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- notifyjs -->
<script src="{{asset('dist/js/notify.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{asset('backend/js/handlebars-v4.7.6.js')}}"></script>


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
<script type="text/javascript">
  $(document).on('click','#click_me',function(){
    var year_id = $('#year').val();
    
    var class_id = $('#class').val();
    $('.notifyjs-corner').html('');

    if (year_id == '') {
      $.notify('Year Required',{globalPosition:'top right',className: 'error'});
    }
     if (class_id == '') {
      $.notify('Class Required',{globalPosition:'top right',className: 'error'});
    }
    $.ajax({
      url:"{{route('students.reg.fee')}}",
      type:"get",
      data:{'year_id':year_id,'class_id':class_id},
      beforeSend:function(){

      },
      success:function(data){

        console.log(data)
        $('#fee').removeClass('d-none');
        
      


        // $.each(data[0],function(key,v){
        //   html +=
        //   '<tr>'+
        //   '<td>'+(key+1)+'</td>'+
        //    '<td>'+v.student.name+'</td>'+
        //    '<td>'+v.student.class+'</td>'+
        //    '<td>'+v.roll+'</td>'+
        //    '<td>'+v.roll+'</td>'+
        //    '</tr>';
        // });
        // html=$('#fee-tr').html(html);
        
        // var source = $("#document-template");
        // var template = Handlebars.compile(source);
        // var html = template(data);
        // $("#documentsResoult").html(html);
        // $('[data-toggle = "tooltip"]').tooltip();
        $('#fee-tr').html(data);
      
      }
     
    });
  });

</script>
<!-- Ajax for manage Registration Fee -->



<!-- Live image show -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showimg').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>
<!-- Data table js  -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    
    
  });
</script>

<!-- Add and remove item -->
 <script type="text/javascript">
  $(document).ready(function(){
    $(document).on("click",".addevent",function(){
      var counter = 0;
      var add_extra_item = $('#extra_item_add').html();
      $(this).closest('.add_item').append(add_extra_item);
      counter ++;
    });
    $(document).on("click",".removeevent",function(){
    	$(this).closest('.extra_item_remove').remove();
    	counter -= 1;
    })
  });
</script>