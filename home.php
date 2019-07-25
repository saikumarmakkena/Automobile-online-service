<?php
$uname=$_GET['uname'];
$pass=$_GET['pass'];

echo'<!DOCTYPE html>
<html lang="en">
<head>
  <title>SSS service application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
h4.intro {
    color: black;
    text-align: center;
}
.navbar-custom {
    color: #3636d8;
    background-color: #58585b;
	}
	.navbar a.active {
    background-color: 	#B22222;
  color: white;}
.important {
    background-color: black;
}
</style>
</head>
<body>
 <!-- navigation bar -->
  <nav class="navbar navbar-inverse  navbar-fixed-top navbar-custom">
 
    <div class="navbar-header">
    <a class="navbar-brand"><img src="logo.jpg" width="74.6%"></a>
    </div>
    <ul class="nav navbar-nav ">
      <li ><a class="active"><h4 style="color:white;">Home</h4></a></li>
	   <li><a href="interior.php?uname='.$uname.'&pass='.$pass.'"><h4>Upgrade</h4></a></li>
	  <li><a href="maintainance.php?uname='.$uname.'&pass='.$pass.'"><h4>Maintainance</h4></a></li>
	  <li><a href="signin.php?uname='.$uname.'&pass='.$pass.'"><h4>Account</h4></a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php"><h4><span class="glyphicon glyphicon-log-in"></span> Logout</h4></a></li>
    </ul>
	</nav>
<div>
<p><br /><br /><br /></p>
</div>
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
	<li data-target="#myCarousel" data-slide-to="3"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="11ceat.jpg" width="100%" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="12ceat.jpg" width="100%"alt="Chicago">
    </div>

    <div class="item">
      <img src="13ceat.jpg" width="100%" alt="New York">
    </div>
	 <div class="item">
      <img src="15ceat.jpg" width="100%" alt="New York">
    </div>
	 
  </div>
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>
</body>
</html>';
?>