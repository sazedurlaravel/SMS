<!DOCTYPE html>
<html>
<head>
  <title>Student Registration Card</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<table width="100%">
  				<td width="30%" >
  					<img src="backend/img/logo.png" style="width: 100px;height: 100px;">
  				</td>
  				<td width="40%" class="text-center">
  					<h4><strong>Nurul Huda High School</strong> </h4>
  					<h4><strong>Parbatipur, Dinajpur</strong> </h4>
  					<h4><strong> www.nhhs.edu.bd</strong></h4>
  				</td>
  				<td width="30%">
  				  <img src="backend/img/student/{{$details['student']['image']}}" style="width: 100px;height: 100px;float: right;">
  				</td>
  			</table>
  		</div>
  		<div class="col-md-12">
        @php 

        $registrationfee =
        App\FeeAmount::where('fee_category_id','2')->where('class_id',$details->class_id)->first();
        $original_fee = $registrationfee->amount;
        $discount = $details['discount']['discount'];
        $discountable_fee = $discount/100*$original_fee;
        $final_fee = (float)$original_fee-(float)$discountable_fee;

        @endphp
       

  			<p style="font-weight: bold;padding-top: 25px;text-align: center">Student Monthly Fee</p>
  		</div>
  		<div class="col-md-12">
  			<table class="table-sm" border="1" width="100%">
  				<tbody>
  					<tr>
  						<td style="width:50%;text-align: justify;padding-left: 5px"><strong>ID NO</strong></td>
  						<td style="width:50%;text-align: justify;padding-left: 5px">{{$details['student']['id_no']}}</td>
  					</tr>
             <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"> <strong>Roll</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details->roll}}</td>
            </tr>
            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"><strong>Student Name</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['student']['name']}}</td>
            </tr>
            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"><strong>Student Father's Name</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['student']['fname']}}</td>
            </tr>
            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"><strong>Student Mother's Name</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['student']['mname']}}</td>
            </tr>
            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"> <strong>Session</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['year']['name']}}</td>
            </tr>

            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"> <strong>Class</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['class']['name']}}</td>
            </tr>
              <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"> <strong>Group</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['group']['name']}}</td>
            </tr>
             <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"><strong>Monthly Fee</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$registrationfee->amount}} TK</td>
            </tr>
            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"><strong>Discount</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['discount']['discount']}} TK</td>
            </tr>
            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"><strong>Fee of {{$month}}</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$final_fee}} TK</td>
            </tr>
  					
  				</tbody>
  			</table>
        <i style="font-size: 10px;">Print Date:{{date('d M Y')}}</i>

  		</div>
  		<div class="col-md-12">
  			<table border="0" width="100%">
  				<tbody>
  					<tr>
  						<td width="30%"></td>
  						<td width="30%"></td>
  						<td width="40%">
  							<hr style="border:solid 1px;width: 60%;margin-bottom: 0;color: #000;">
  							<p style="text-align: center">Principle/Head Master</p>
  						</td>
  					</tr>
  				</tbody>
  			</table>
  		</div>
      <hr style="border:dashed 1px ;color: #DDD">
     <div class="col-md-12">
        <table width="100%">
          <td width="30%" >
            <img src="backend/img/logo.png" style="width: 100px;height: 100px;">
          </td>
          <td width="40%" class="text-center">
            <h4><strong>Nurul Huda High School</strong> </h4>
            <h4><strong>Parbatipur, Dinajpur</strong> </h4>
            <h4><strong> www.nhhs.edu.bd</strong></h4>
          </td>
          <td width="30%">
            <img src="backend/img/student/{{$details['student']['image']}}" style="width: 100px;height: 100px;float: right;">
          </td>
        </table>
      </div>
      <div class="col-md-12">
        @php 

        $registrationfee =
        App\FeeAmount::where('fee_category_id','2')->where('class_id',$details->class_id)->first();
        $original_fee = $registrationfee->amount;
        $discount = $details['discount']['discount'];
        $discountable_fee = $discount/100*$original_fee;
        $final_fee = (float)$original_fee-(float)$discountable_fee;

        @endphp
       

        <p style="font-weight: bold;padding-top: 25px;text-align: center"> Student Monthly Fee</p>
      </div>
      <div class="col-md-12">
        <table class="table-sm" border="1" width="100%">
          <tbody>
            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"><strong>ID NO</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['student']['id_no']}}</td>
            </tr>
             <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"> <strong>Roll</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details->roll}}</td>
            </tr>
            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"><strong>Student Name</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['student']['name']}}</td>
            </tr>
            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"><strong>Student Father's Name</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['student']['fname']}}</td>
            </tr>
            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"><strong>Student Mother's Name</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['student']['mname']}}</td>
            </tr>
            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"> <strong>Session</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['year']['name']}}</td>
            </tr>

            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"> <strong>Class</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['class']['name']}}</td>
            </tr>
              <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"> <strong>Group</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['group']['name']}}</td>
            </tr>
             <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"><strong>Monthly Fee</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$registrationfee->amount}} TK</td>
            </tr>
            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"><strong>Discount</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$details['discount']['discount']}} TK</td>
            </tr>
            <tr>
              <td style="width:50%;text-align: justify;padding-left: 5px"><strong>Fee of {{$month}}</strong></td>
              <td style="width:50%;text-align: justify;padding-left: 5px">{{$final_fee}} TK</td>
            </tr>
            
          </tbody>
        </table>
        <i style="font-size: 10px;">Print Date:{{date('d M Y')}}</i>

      </div>
      <div class="col-md-12">
        <table border="0" width="100%">
          <tbody>
            <tr>
              <td width="30%"></td>
              <td width="30%"></td>
              <td width="40%">
                <hr style="border:solid 1px;width: 60%;margin-bottom: 0;color: #000;">
                <p style="text-align: center">Principle/Head Master</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
  	</div>
  </div>
</body>
</html>