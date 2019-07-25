<?php


$uname=$_GET['uname'];
$pass=$_GET['pass'];

echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SSS service application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="interiorcss.css" rel="stylesheet" type="text/css">
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
	.navbar a:hover {
    background-color: #ddd;
    color: black;
}
	.navbar a.active {
    background-color: #4CAF50;
    color: white;
}
.important {
    background-color: black;
}
</style>
</head>
<body>
 <!-- navigation bar -->
 <div class="container">
  <nav class="navbar navbar-inverse  navbar-fixed-top navbar-custom">
 
    <div class="navbar-header">
    <a class="navbar-brand"><img src="logo.jpg" width="74.6%"></a>
    </div>
    <ul class="nav navbar-nav ">
	<li><a href="home.php?uname='.$uname.'&pass='.$pass.'"><h4>Home</h4></a></li>
      <li ><a class="active"><h4 style="color:white;">Upgrade</h4></a></li>
	  
	  <li><a href="maintainance.php?uname='.$uname.'&pass='.$pass.'"><h4>Maintainance</h4></a></li>
	  <li><a href="signin.php?uname='.$uname.'&pass='.$pass.'"><h4>Account</h4></a></li>
    </ul>
	 <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php"><h4><span class="glyphicon glyphicon-log-in"></span> Logout</h4></a></li>
    </ul>
</nav> 
<p><br><br><br><br><br></p>

<table border="2" width="100%" >
<tr><td width="80%" height="80" rowspan="5"><img  src="11ceat.jpg" width="100%" alt="New York"></td>
<td height="80" align="center">color: red and black</td>
</tr>
<tr>

<td height="80"  align="center">quality:leather made</td>
</tr>

<tr >

<td height="80"  align="center">cost:25,000rs </td></tr>
<tr>
<td height="80"  align="center">type:Booster model-1</td></tr>
<tr>

<td height="80"  align="center">look:Rich</td>
</tr>
</table>
<P><br></p>

 <form method="post" action="signin.php?uname='.$uname.'&pass='.$pass.'">
 <center><input type="submit" name="buy1" value="buy" class="btn btn-info" /></center>
 </form>
<P><br></p>

<nav aria-label="...">
  <ul class="pager">
    <li class="previous disabled"><a ><span aria-hidden="true">&larr;</span> Previous</a></li>
    <li class="next "><a href="interior2.php?uname='.$uname.'&pass='.$pass.'">Next<span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>


</body>
</html>';


?>