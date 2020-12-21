<!DOCTYPE html>
<html>
<head>
  <title>Employe Details</title>
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
  				  <img src="backend/img/employee/{{$details->image}}" style="width: 100px;height: 100px;float: right;">
  				</td>
  			</table>
  		</div>
  		<div class="col-md-12">
  			<h3 style="font-weight: bold;padding-top: 25px;text-align: center">Employee Details Information</h3>
  		</div>
  		<div class="col-md-12">
  			<table border="1" width="100%">
  				<tbody>
            <tr>
              <td style="width:50%;text-align: justify;padding: 5px"><strong>ID NO</strong></td>
              <td style="width:50%;text-align: justify;padding: 5px">{{$details->id_no}}</td>
            </tr>
            
  					<tr>
  						<td style="width:50%;text-align: justify;padding: 5px"><strong>Employee Name</strong></td>
  						<td style="width:50%;text-align: justify;padding: 5px">{{$details->name}}</td>
  					</tr>
  					<tr>
  						<td style="width:50%;text-align: justify;padding: 5px"><strong>Employee Father's Name</strong></td>
  						<td style="width:50%;text-align: justify;padding: 5px">{{$details->fname}}</td>
  					</tr>
  					<tr>
  						<td style="width:50%;text-align: justify;padding: 5px"><strong>Employee Mother's Name</strong></td>
  						<td style="width:50%;text-align: justify;padding: 5px">{{$details->mname}}</td>
  					</tr>
  					<tr>
              <td style="width:50%;text-align: justify;padding: 5px"> <strong>Gender</strong></td>
              <td style="width:50%;text-align: justify;padding: 5px">{{$details->gender}}</td>
            </tr>

            <tr>
              <td style="width:50%;text-align: justify;padding: 5px"> <strong>Mobile No.</strong></td>
              <td style="width:50%;text-align: justify;padding: 5px">{{$details->mobile}}</td>
            </tr>
            <tr>
              <td style="width:50%;text-align: justify;padding: 5px"> <strong>Email</strong></td>
              <td style="width:50%;text-align: justify;padding: 5px">{{$details->email}}</td>
            </tr>
            
  				
  					
  					
  					<tr>
  						<td style="width:50%;text-align: justify;padding: 5px"><strong>Religion</strong> </td>
  						<td style="width:50%;text-align: justify;padding: 5px">{{$details->religion}}</td>
  					</tr>
  					<tr>
  						<td style="width:50%;text-align: justify;padding: 5px"><strong>Address</strong> </td>
  						<td style="width:50%;text-align: justify;padding: 5px">{{$details->address}}</td>
  					</tr>
  					<tr>
  						<td style="width:50%;text-align: justify;padding: 5px"> <strong>Date of Birth</strong></td>
  						<td style="width:50%;text-align: justify;padding: 5px">{{$details->dob}}</td>
  					</tr>
              <tr>
              <td style="width:50%;text-align: justify;padding: 5px"> <strong>Join Date</strong></td>
              <td style="width:50%;text-align: justify;padding: 5px">{{$details->join_date}}</td>
            </tr>
              <tr>
              <td style="width:50%;text-align: justify;padding: 5px"> <strong>Salary</strong></td>
              <td style="width:50%;text-align: justify;padding: 5px">{{$details->salary}} TK</td>
            </tr>
  				</tbody>
  			</table>
  		</div>
  		<br>
  		<br>
  		<br>
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