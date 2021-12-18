<html>
<head>
<title>Student Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
body{
margin:0;
padding:0;
background-image:url("images/library1.jpg");
background-size:cover;
background-position:absolute;
background-repeat: no-repeat;
height:100%;
font-family:gabriola;

}
.loginbox{
  width:320px;
  height:450px;
  background:rgba(0,0,0,0.5);
  color:#fff;
  top:50%;
  left:50%;
  position:absolute;
  transform:translate(-50%,-50%);
  box-sizing:border-box;
  padding:70px 30px;


}
.u{
width:100px;
height:100px;
border-radius:50%;
border-color:#00ff00;
position:absolute;
top:-50px;
left: calc(50% - 50px);
}
.h1{
 margin:0;
 padding: 0 0 20px;
 text-align:center;
 font-size:22px;

}
.loginbox p{
margin:0;
padding:0;
font-weight:bold;
}
.loginbox input{
width:100%;
margin-bottom:20px;
}
.loginbox input[type="text"],input[type="password"]
{
border:none;
border-bottom: 1px solid #fff;
background:transparent;
outline:none;
height:40px;
color:#fff;
font-size:16px;
}
.loginbox input[type="submit"]
{
border:none;
 outline:none;
 height:40px;
 color:#fff;
 background:#fb2525;
 font-size:18px;
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
 <! nav {
	float:right;
	word-spacing:30px;
	padding:20px;
}
nav li{
	display:inline-block;
	line-height:80px;
} 
!>

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

       <nav class="navbar navbar-inverse">
	   <div class="container-fluid">
	   <div class="navbar-header">
	   <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
	   </div>
	        
			<ul class="nav navbar-nav">
			<li><a href="index.php">HOME</a></li>
			<li><a href="books.php">BOOKS</a></li>
			<li><a href="feedback.php">FEEDBACK</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
			<li><a href="student login page.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
			<li><a href="student login page.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
			<li><a href="student registration page.php"><span class="glyphicon glyphicon-user">   SIGN UP</span></a></li>
			
			</ul>
			</div>
	       </nav>
       
	   
	    


<div class="loginbox">
<img src="images.user.jpg"  class="u">
<h1>Student Login </h1>
<form>
<p>Username</p>
<input class="form-control" type="text" name="" placeholder="Enter Username"required="" >
<p>Password</p>
<input  class="form-control" type="password" name="" placeholder="Enter Password" required="">
<input  type="submit"  class="btn btn-default" name="Login" color="#fff" value="Login">
<a href="forgot password page.html"> Lost your password?</a><br>
<a href="student registration page.php">Don't have an account? &nbsp Register</a>
</form>
<?php
   $user='jyothi';
   $Password='JYOTHI';
   if($user=='jyothi'&& $password=='JYOTHI')
   {
	 header('./face_detection-model/index.php');
	 
   }
   
   
 ?> 

</div>
</body>
</head>
</html>