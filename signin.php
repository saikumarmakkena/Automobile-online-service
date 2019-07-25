
<?php

$host="localhost";
$user="root";
$pass="";
$db="ooad";
$sai= mysqli_connect($host,$user,$pass,$db);

$uname=$_GET['uname'];
$pass=$_GET['pass'];

$sql=$sai->query("select * from project where username='$uname'");

$rows=$sql->fetch_assoc();
   
if($rows['password']==$pass)
{
	echo'<!DOCTYPE html>
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="landng.css" rel="stylesheet" type="text/css">
  <link href="jquery.multiselect.css" rel="stylesheet" type="text/css">
   <script src="jquery.min.js"></script>
    <script src="jquery.multiselect.js"></script>
	
	
  <style>
  .navbar a.active {
    background-color: #07ddff;
  color: white;
  }
  .navbar-custom {
    color: #3636d8;
    background-color: #58585b;
	}
});

.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
color: #3636d8; 
background-color: transparent;
}
  </style>
</head>
<body color="red">
<nav class="navbar navbar-inverse  navbar-fixed-top navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand"><img src="logo.jpg" width="65%"></a>
    </div>
    <ul class="nav navbar-nav ">
      <li><a href="home.php?uname='.$uname.'&pass='.$pass.'"><h4>Home</h4></a></li>
	  <li><a href="interior.php?uname='.$uname.'&pass='.$pass.'"><h4>Upgrade</h4></a></li>
	  <li><a href="maintainance.php?uname='.$uname.'&pass='.$pass.'"><h4 >Maintainance</h4></a></li>
	  <li ><a class="active" style="color:white;"><h4>Account</h4></a></li>
    </ul>
	 <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php"><h4><span class="glyphicon glyphicon-log-in"></span> Logout</h4></a></li>
    </ul>
  </div>
</nav>
<p><br><br><br><br></p>
<center>
<h1>DETAILS</h1>
</center>
<table width="50%" border="1" align="center">
<tr>
<td width="60%" align="center">name</td>
<td align="center">';
echo $rows['username'].'</td>
</tr>
<tr>
<td width="60%" align="center">address</td>
<td align="center">';
echo $rows['address'].'</td>
</tr>
<tr>
<td width="60%" align="center">phone number</td>
<td align="center">';
echo $rows['phone number'].'</td>
</tr>
<tr>
<td width="60%" align="center">email</td>
<td align="center">';
echo $rows['email'].'</td>
</tr>
<tr>
<td width="60%" align="center">car</td>
<td align="center">';
echo $rows['car'].'</td>
</tr>
<tr>
<td width="60%" align="center">model</td>
<td align="center">';
echo $rows['model'].'</td>
</tr>
<tr>
<td width="60%" align="center">cost</td>
<td align="center">';
echo $rows['cost'].'</td></tr>
<tr>
<td width="60%" align="center">mileage</td>
<td align="center">';
echo $rows['mileage'].'</td>
</tr>
<tr>
<td width="60%" align="center">fuel capacity</td>
<td align="center">';
echo $rows['fuel capacity'].'</td></tr>
<tr>
<td width="60%" align="center">fuel type</td>
<td align="center">';
echo $rows['fuel type'].'</td></tr>
<tr>
<td width="60%" align="center">engine</td>
<td align="center">';
echo $rows['engine'].'</td></tr>
</table>

	</body>
	</html>

';
}
else{
	
	echo '<div class="modal-body">
	 <center><h1><br><br><br>INVALID LOGIN</h1></center>
	</div>';
}
//maintainance module
$item='';
$item2='';
$item3='';
if(isset($_POST['checkup']))
{
foreach($_POST['checkup'] as $item)
{
  if($item=="tyre")
    { $sai->query("INSERT INTO `maintain`(`username`, `maintainance`, `cost`) VALUES ('".$uname."','tyre change',2000)");}
  else if($item=="wheeltube")
    { $sai->query("INSERT INTO `maintain` (`username`, `maintainance`, `cost`) VALUES ('".$uname."','tyre tube',1000)");}
  else if($item=="water")
    {  $sai->query("INSERT INTO `maintain` (`username`, `maintainance`, `cost`) VALUES ('".$uname."','water service',500)");}
   else if($item=="window")
   { $sai->query("INSERT INTO `maintain`(`username`, `maintainance`, `cost`) VALUES ('".$uname."','window glass',7000)");}
   else if($item=="repaint")
   { $sai->query("INSERT INTO maintain (`username`, `maintainance`, `cost`) VALUES ('".$uname."','car painting', 2000)");}
   else if($item=="airc")
   { $sai->query("INSERT INTO maintain (`username`, `maintainance`, `cost`) VALUES ('".$uname."','air conditioner', 2000)");}
   else if($item=="lights")
   { $sai->query("INSERT INTO maintain (`username`, `maintainance`, `cost`) VALUES ('".$uname."','car lights', 2000)");}
   else if($item=="mirrors")
   { $sai->query("INSERT INTO maintain (`username`, `maintainance`, `cost`) VALUES ('".$uname."','car side mirrors', 2000)");}   	   
}
}
//for service
if(isset($_POST['service']))
{
   $item2=$_POST['service'];
  if($item2=="ser1")
    { 
      
       $sai->query("INSERT INTO `maintain`(`username`, `maintainance`, `cost`) VALUES ('".$uname."','service1',0000)");
	}
  else if($item2=="ser2")
    { $sai->query("INSERT INTO `maintain` (`username`, `maintainance`, `cost`) VALUES ('".$uname."','service2',0000)");}
  else if($item2=="ser3")
    {  $sai->query("INSERT INTO `maintain` (`username`, `maintainance`, `cost`) VALUES ('".$uname."','service3',0000)");}
   	   

}             

//for repairs
if(isset($_POST['repairs']))
{
foreach($_POST['repairs'] as $item3)
{
  if($item3=="engine")
    { $sai->query("INSERT INTO `maintain`(`username`, `maintainance`, `cost`) VALUES ('".$uname."','engine failure',5000)");}
  else if($item3=="brake")
    { $sai->query("INSERT INTO `maintain` (`username`, `maintainance`, `cost`) VALUES ('".$uname."','brake failure',1000)");}
  else if($item3=="gear")
    {  $sai->query("INSERT INTO `maintain` (`username`, `maintainance`, `cost`) VALUES ('".$uname."','gear rod problem',2000)");}
   else if($item3=="leak")
   { $sai->query("INSERT INTO `maintain`(`username`, `maintainance`, `cost`) VALUES ('".$uname."','oil leakage',1000)");}
   else if($item3=="ignition")
   { $sai->query("INSERT INTO maintain (`username`, `maintainance`, `cost`) VALUES ('".$uname."','ignition problem', 500)");}
   else if($item3=="radiator")
   { $sai->query("INSERT INTO maintain (`username`, `maintainance`, `cost`) VALUES ('".$uname."','radiator problem', 1500)");}
   else if($item3=="damage")
   { $sai->query("INSERT INTO maintain (`username`, `maintainance`, `cost`) VALUES ('".$uname."','damaged alternator', 2000)");}
   else if($item3=="dents")
   { $sai->query("INSERT INTO maintain (`username`, `maintainance`, `cost`) VALUES ('".$uname."','dents on car', 1500)");}   	   
}
}//upgrade


if(isset($_POST['buy1'])){

$sai->query("INSERT INTO `interior`(`username`, `color`, `type`, `quality`, `cost`, `look`) 
       VALUES ('".$uname."','red and black','booster model-1','leather',25000,'high')");
	   }


if(isset($_POST['buy2'])){

$sai->query("INSERT INTO `interior`(`username`, `color`, `type`, `quality`, `cost`, `look`) 
       VALUES ('".$uname."','tan and black','booster model-2','fabric leather',20000,'high')");
	   }

if(isset($_POST['buy3'])){

$sai->query("INSERT INTO `interior`(`username`, `color`, `type`, `quality`, `cost`, `look`) 
       VALUES ('".$uname."',' brown','booster model-3','fabric',30000,'top class')");
	   }	   

if(isset($_POST['buy4'])){

$sai->query("INSERT INTO `interior`(`username`, `color`, `type`, `quality`, `cost`, `look`) 
       VALUES ('".$uname."','dark red','booster model-4','leather',35000,'top class')");
	   }	   
	   
//from interior databases
$sthg='';
$total=0;

$sql=$sai->query("SELECT  `type`, `cost`,quality,color FROM `interior` WHERE username='".$uname."'");
if($sql->num_rows!=0)
{  
    echo '<br><br><center><h2>UPGRADE</h2></center><br><br>';

    echo ' <center><table border="1"  width="50%">';

    while($sthg=$sql->fetch_assoc())
    {
	  echo ' <tr>
	   <td width="60%" align="center">Type</td>
	   <td align="center">'.$sthg["type"].'</td>
	   </tr>';
	    echo ' <tr>
	   <td width="60%" align="center">Cost</td>
	   <td align="center">'.$sthg["cost"].'</td>
	   </tr>';
	    echo ' <tr>
	   <td width="60%" align="center">Quality</td>
	   <td align="center">'.$sthg["quality"].'</td>
	   </tr>';
	    echo ' <tr>
	   <td width="60%" align="center">Color</td>
	   <td align="center">'.$sthg["color"].'</td>
	   </tr>';
	   
	   $total+=$sthg["cost"];
    }
	  
	  echo '</table></center><br>';
	  echo '<center><h2>TOTAL:'.$total.'</h2></center>';
	  echo '<p><br><br><br></p>';
}	


//displaying from the database

$tot=0;
$sql=$sai->query("SELECT  `maintainance`, `cost` FROM `maintain` WHERE username='".$uname."'");
if($sql->num_rows!=0)
{  
    echo '<br><br><center><h2>MAINTAINANCE</h2></center><br><br>';

    echo ' <center><table border="1"  width="50%">';

    while($sthg=$sql->fetch_assoc())
    {
	  echo ' <tr>
	   <td width="60%" align="center">'.$sthg["maintainance"].'</td>
	   <td align="center">'.$sthg["cost"].'</td>
	   
	   </tr>';
	   $tot+=$sthg["cost"];
    }
	  
	  echo '</table></center><br>';
	  echo '<center><h2>TOTAL:'.$tot.'</h2></center>';
	  echo '<p><br><br></p>';
	   $total+=$tot;
	  echo '<center><h1>OVERALL TOTAL:'.$total.'</h1></center>';
}	


$sai->close();
?>