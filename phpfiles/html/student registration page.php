<?php
    include "connection.php";
?>
<html>
<head>
<title>Student Registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
body{
margin:0;
padding:0;
background-image:url("images/lib.jpg");
background-size:cover;
background-position:absolute;
background-repeat: no-repeat;
height:100%;
font-family:gabriola;

}
.loginbox{
  width:320px;
  height:600px;
  background:rgba(0,0,0,0.5);
  color:#fff;
  top:50%;
  left:50%;
  position:absolute;
  transform:translate(-50%,-50%);
  box-sizing:border-box;
  padding:70px 30px;
  margin-top:50px;


}
.u{
width:100px;
height:100px;
border-radius:50%;
border-color:#00ff00;
position:absolute;
top:-40px;
left: calc(50% - 50px);
}
.h1{
 margin-top:0;
 padding: 0 0 20px;
 text-align:center;
 font-size:20px;
 }
.loginbox p{
margin:0;
padding:0;
font-weight:bold;
 
}
.loginbox input{
width:100%;
margin-bottom:15px;
}
.loginbox input[type="text"],input[type="password"]
{
border:none;
border-bottom: 1px solid #fff;
background:transparent;
outline:none;
height:15px;
color:#fff;
font-size:14px;
}
.loginbox input[type="submit"]
{
border:none;
 outline:none;
 height:40px;
 color:#fff;
 background:#fb2525;
 font-size:17px;
 border-radius:20px;
}
.loginbox input[type="submit"]:hover
{
cursor:pointer;
background:#ffc107;
color:#000;
}
.loginbox a{
text-decoration:none;
font-size:15px;
line-height:20px;
color:darkgrey;

}
.loginbox a:hover
{
color:#ffc107;
}
.aa{
font-color:#fff;
border-radius:50px;
}

li a
{
	color:white;
	text-decoration:none;
	
}
nav{
	float:right;
	word-spacing:30px;
	padding:20px;
}
nav li{
	display:inline-block;
	line-height:80px;
}
header
{
	height:100px;
	width:1140px;
	background-color:black;
}
.b
{
    float:left;
	padding-left:20px;
	padding-top:20px;
}

</style>
<body>
<div class="wrapper">

       <header style="height:100px;">
	   <div class="b">
	   <h1 style="color:white;font-size:30px; word-spacing:7px; line-height:20px; margin-top:20px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
	   </div>
	        <nav>
			<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="books.php">BOOKS</a></li>
			<li><a href="student login page.php">STUDENT_LOGIN</a></li>
			<li><a href="Admin login page.php">ADMIN_LOGIN</a></li>
			<li><a href="feedback.php">FEEDBACK</a></li>
			</ul>
	       </nav>
       </header>


<div class="loginbox">

<img src="images/user.jpg"  class="u">
<h1>Student Register Here</h1>
<form name="registration" action="" method="POST">
<p>First Name</p>
<input  class="form-control" type="text" name="" placeholder="Enter Firstname"required="">
<p>Last name</p>
<input  class="form-control" type="text" name="" placeholder="Enter Lastname"required="">
<p>Username</p>
<input  class="form-control" type="text" name="" placeholder="Enter Username"required="">
<p>ID Number</p>
<input  class="form-control" type="text" name="" placeholder="Enter ID no"required="">
<p>Email</p>
<input  class="form-control" type="text" name="" placeholder="Enter Email"required="">
<p>Password</p>
<input  class="form-control" type="password" name="" placeholder="Enter Password" required="">
<p>Confirm Password</p>
<input  class="form-control" type="password" name="" placeholder="Enter Confirm Password" required="">
<p>Phone number</p>
<input  class="form-control" type="text" name="" placeholder="Enter Ph no" required=""><br>
<p>chose the photo</p>
<input  class="form-control"  type="button" value="select image" placeholder="choosephoto" required=""><br>
<input type="submit" name="" color="#fff" value="Submit">

</form>
</div>
</body>
</head>
</html>