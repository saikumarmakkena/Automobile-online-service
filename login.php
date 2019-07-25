<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Login</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
   
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}
.navbar-custom {
    color: #3636d8;
    background-color: #c0c3c6;
	}
button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 16px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 18px;
}

span.pass {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.pass {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 60%;
    }
}
</style>
</head>
<body>
 <nav class="navbar navbar-inverse  navbar-fixed-top navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand"><img src="logo.jpg" width="74.6%"></a>
    </div>
    <ul class="nav navbar-nav ">
      <li><a href="app.php"><h4 style="color:black";>Home</h4></a></li>
	  <li><a href="car1.php"><h4 style="color:black";>Showroom</h4></a></li>
	  <li><a href="maintainance1.php"><h4 style="color:black";>Services</h4></a></li>
	  <li class="active"><a><h4 style="color:white";>Login</h4></a></li>
    </ul>
  </div>
</nav> 
<center>

<p><br><br><br><br>You haven't logged in so please Login<br><br></p>
<h1>Login Form</h1>

<div class="container">
<form method="get" action="http://localhost:1111/project/signin.php">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>
    <label for="pass"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="pass" required>
     <br>   
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

 <input type="hidden" name="checkup" value="">

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    
  </div>
</form>


</div>
</center>
</body>
</html>
