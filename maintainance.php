<?php

$uname=$_GET['uname'];
$pass=$_GET['pass'];

echo'<!DOCTYPE html>
<html lang="en">
<head>
  <title>maintainance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstarp-multiselect.css" />
  <link href="maintain.css" rel="stylesheet" type="text/css">
  <style>
  .navbar-custom {
    color: #3636d8;
    background-color: #58585b;
	}
	.navbar a.active {
    background-color: 	#A9A9A9;
  color: white;
  }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse  navbar-fixed-top navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand"><img src="logo.jpg" width="65%"></a>
    </div>
    <ul class="nav navbar-nav ">
      <li><a href="home.php?uname='.$uname.'&pass='.$pass.'"><h4 >Home</h4></a></li>
	  <li><a href="interior.php?uname='.$uname.'&pass='.$pass.'"><h4>Upgrade</h4></a></li>
	  <li ><a class="active" style="color:white;"><h4>Maintainance</h4></a></li>
	  <li><a href="signin.php?uname='.$uname.'&pass='.$pass.'"><h4>Account</h4></a></li>
	 </ul>
	  </ul>
	 <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php"><h4><span class="glyphicon glyphicon-log-in"></span> Logout</h4></a></li>
    </ul>
  </div>
</nav> 
<p><br><br><br><br><br></p>
  <center>
  
	<table  cellpadding="10" cellspacing="10" width="95%">
	<tr>
	<td align="center">
	<form method="post" action="signin.php?uname='.$uname.'&pass='.$pass.'">
	  <div class="form-group ">
	 
	<select id="checkup" name="checkup[]" multiple class="form-control">
	
	<option value="tyre">tyre change &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       2000 </option>
	<option value="wheeltube">tyre tube   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         1000 </option>
	<option value="water">water service       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      500 </option>
	<option value="window">window glass    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;       7000 </option>
	<option value="repaint">car painting    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        2000 </option>
	<option value="airc">air conditioner    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        2000 </option>
	<option value="lights">car lights    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        2000 </option>
	<option value="mirrors">side mirrors    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        2000 </option>
	</select> 
	</div>
    <div class="form-group">
	<input type="submit" name="submit" value="submit" class="btn btn-info" />
	
	</div>
    </form></td>
	<td align="center">
	<form method="post" action="signin.php?uname='.$uname.'&pass='.$pass.'">
	  <div class="form-group ">
	 
	<select id="service" name="service" class="form-control">
	
	<option value="ser1">service1 &nbsp;&nbsp;&nbsp;        </option>
	<option value="ser2">service2   &nbsp;&nbsp;&nbsp;     </option>
	<option value="ser3">service3       &nbsp;&nbsp;&nbsp;  </option>
	
	</select> 
	</div>
    <div class="form-group">
	<input type="submit" name="submit" value="submit" class="btn btn-info" />
	
	</div>
    </form></td>
	<td align="center">
	<form method="post" action="signin.php?uname='.$uname.'&pass='.$pass.'">
	  <div class="form-group ">
	 
	<select id="repairs" name="repairs[]" multiple class="form-control">
	
	<option value="engine">engine failure &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       5000 </option>
	<option value="brake">brake failure   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         1000 </option>
	<option value="gear">gear rod problem   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        2000 </option>
	<option value="leak">oil leakage    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;       1000 </option>
	<option value="ignition">ignition problem    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       500 </option>
	<option value="radiator">radiator problem    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        1500 </option>
	<option value="damage">damaged alternator    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        2000 </option>
	<option value="dents">dents on car    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       1500 </option>
	</select> 
	</div>
    <div class="form-group">
	<input type="submit" name="submit" value="submit" class="btn btn-info" />
	
	</div>
    </form>
	
	
	</td></tr>
	</table></center>
	</body></html>'."
<script>
$(document).ready(function(){
 $('#checkup').multiselect({
    nonSelectedText:'checkup',
	buttonWidth:'400px',
 
 });


 $('#service').multiselect({
    nonSelectedText:'services',
	buttonWidth:'400px',
 
 });
 $('#repairs').multiselect({
    nonSelectedText:'repairs',
	buttonWidth:'400px',
 
 });
	
});
</script>";
?>