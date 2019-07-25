<?php
$host="localhost";
$user="root";
$pass="";
$db="ooad";
$sai= mysqli_connect($host,$user,$pass,$db);


echo'<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Showroom</title>
 <style>
 .navbar-custom {
    color: #3636d8;
    background-color: #c0c3c6;
	}
  
  </style>
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse  navbar-fixed-top navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand"><img src="logo.jpg" width="74.6%"></a>
    </div>
    <ul class="nav navbar-nav ">
      <li><a href="app.php"><h4 style="color:black";>Home</h4></a></li>
	  <li class="active"><a ><h4 style="color:white";>Showroom</h4></a></li>
	  <li><a href="maintainance1.php"><h4 style="color:black";>Services</h4></a></li>
	  <li><a  href="login.php"><h4 style="color:black";>Login</h4></a></li>
    </ul>
  </div>
</nav> 
<p><br><br><br></p>

<nav aria-label="...">
  <ul class="pager">
    <li class="previous"><a href="car3.php"><span aria-hidden="true">&larr;</span> Previous</a></li>
    <li class="next"><a href="car5.php">Next<span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="bmw 1.jpg" width="100%" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="bmw 2.jpg" width="100%"alt="Chicago">
    </div>

    <div class="item">
      <img src="bmw 3.jpg" width="100%" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>

<nav aria-label="...">
  <ul class="pager">
    <li class="previous"><a href="car3.php"><span aria-hidden="true">&larr;</span> Previous</a></li>
    <li class="next"><a href="car5.php">Next<span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>
<div class="card text-center">
  <div class="card-header">
    
    <div class="container">
  <h2>Features</h2>

  <table class="table">
 
    <tbody>
      <tr>
        <td>Company</td>
        <td>BMW</td>
        
      </tr>      
      <tr class="success">
        <td>Car model</td>
        <td>X1</td>
             
      </tr>
      <tr class="danger">
        <td>Fuel type</td>
        <td>Disel</td>
        
      </tr>
      <tr class="info">
        <td>Engine</td>
        <td>1995cc</td>
       
      </tr>
      
      <tr class="danger">
        <td>Fuel capacity</td>
        <td>61 L</td>
        
      </tr>

      <tr class="warning">
        <td>Mileage</td>
        <td>20.68 kmpl</td>
        
      </tr>
      <tr class="active">
        <td>Cost</td>
        <td>34,47,000/-(34.47 lakhs)</td>
        
      </tr>
    </tbody>
  </table>
</div>

  </div>
  <div class="card-body">
    <h5 class="card-title">                               </h5>
    <p class="card-text">                                                    </p>
        <img  src="abs.jpg" alt="abs">&nbsp;&nbsp;&nbsp;<img  src="airbag.jpg" alt="airbag">
    <br>
    <br>
    <h2>Safety features</h2>
    <p><h3>Anti-lock </h3>
ABS brakes automatically sense when a tire has stopped rotating under extreme braking, and will modulate the brake pressure to allow the tire to rotate. This increases the vehicles ability to turn while braking.</p>

<p><h3>Stability control</h3>
Stability control automatically senses when the vehicles handling limits have been exceeded and reduces engine power and/or applies select brakes to help prevent the driver from losing control of the vehicle.</p>

<p><h3>Front-impact airbags</h3>
Front-impact airbags for the driver and passenger have been designed to protect the head during a frontal crash.</p>

<p><h3>Side impact airbags</h3>
Side impact airbags for the front seats have been designed to protect the torso during a side impact collision.</p>

<p><h3>Overhead airbags</h3>
Overhead airbags are used to protect the occupants heads in the event of a side collision or rollover.</p>

<p><h3>Knee airbags</h3>
Knee airbags help to protect the occupants lower extremities from serious injury in the event of an accident.</p>

<p><h3>Pretensioners</h3>
Seatbelt pretensioners automatically tighten seatbelts to place the occupant in the optimal seating position during a collision.</p>

<p><h3>Security system</h3>
The vehicle is equipped with a means of anticipating and/or detecting unwanted vehicle intrusion. The vehicle is equipped with an ignition disable device that will prevent the engine from starting if the correct original manufacturer key is not used.</p>
<br>
<br>
<br>

    <!-- Trigger the modal with a button -->
	
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
<p><br><br></p>
<!-- Modal -->
<form method="get" action="">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
	
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
	  
      <div class="modal-body">
        <p>Enter customwr details.</p>
        <table  width="100%">
		
  <tr> <div class="form-group">
 <td align="center"> <label for="usr">Name:</label> </td><td><input type="text" class="form-control" name="usr" id="usr"></td>
  
</div></tr>

<tr><div class="form-group">
 <td align="center"> <label for="pwd">Password:</label> </td><td><input type="password" class="form-control" name="pwd" id="pwd"></td>
  
</div></tr>
 <tr> <div class="form-group">
 <td align="center"> <label for="usr">Email id:</label> </td><td><input type="text" class="form-control" name="email" id="email"></td>
  
</div></tr>

 <tr> <div class="form-group">
 <td align="center"> <label for="usr">Phone No:</label> </td><td><input type="text" class="form-control" name="phone" id="phone"></td>
  
</div></tr>
 <tr> <div class="form-group">
 <td align="center"> <label for="usr">Address:</label> </td><td><input type="text" class="form-control" name="add" id="add"></td>
  
</div></tr>
</table>
      </div>
      <div class="modal-footer">
	  
         <input type="submit" name="sbtn"/>
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  
    </div>

  </div>
</div>
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
</form>
</div>
</body>
</html>';
$car="BMW";
$model="X1";
$mileage="20.68 kmpl";
$fuel_capacity="61L";
$fuel_type="Disel";
$engine="1995cc";
$cost="34.47 lakhs";
if(isset($_GET['sbtn'])){
$name=$_GET['usr'];
$password=$_GET['pwd'];
$address=$_GET['add'];
$email=$_GET['email'];
$phone=$_GET['phone'];


$sai->query("INSERT INTO `project`(`username`, `address`, `phone number`, `email`, `password`, `car`, `model`,
 `mileage`, `fuel capacity`, `fuel type`, `engine`, `cost`) 
VALUES ('".$name."','".$address."','".$phone."','".$email."','".$password."','".$car."','".$model."','".$mileage."',
'".$fuel_capacity."','".$fuel_type."','".$engine."','".$cost."')");


}

$sai->close();
?>