<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	
	<style>
		
		*
		{
			margin:0;
			padding:0;
			box-sizing:border-box;
			font-family:'Josefin sans', sans-serif;
		}
		 
		.box
		{
			width:400px;
			position:absolute;
			top:50%;
			left:50%;
			transform:translate(-50%,-50%);
			padding:50px;
			background:rgba(209, 32, 47, 0.9);
			/*background: linear-gradient(to bottom, #990000 0%, #0000ff 100%);*/
			border-radius:10px;
		}

		.box h1
		{
			margin-bottom:30px;
			color:#fff;
			text-align:center;
			text-transform:capitalize;
		}
			
		.box .inputBox
		{
			position: relative;
		}
			 	
		.box .inputBox input
		{
			width:100%;
			padding:10px;
			font-size:16px;
			color:#fff;
			letter-spacing:1px;
			margin-bottom:30px;
			border:none;
			border-bottom:1px solid #fff;
			background:transparent;
		}
		
		.box .inputBox label
		{
			position:absolute;
			top:0;
			left:0;
			letter-spacing:1px;
			padding:10px 0;
			font-size:16px;
			color:#fff;
			transition:0.5s;
		}
		
		.box .inputBox input:focus + label,
		.box .inputBox input:valid ~ label
		{
			top:-25px;
			left:0;
			color:#fff;
			font-size:12px;
		}
		
		.box input[type="submit"]
		{
			background:transparent;
			border:none;
			outline:none;
			color:#FF0000;
			background:#fff;
			padding:8px 16px;
			border-radius:5px;
			font-size:14px;
		}
		
	</style>

<?php
session_start();
	$servername="localhost";
	$username="root";
	$password="aastha";
	$database="bloodbank_nitr";

	$con=mysqli_connect($servername,$username,$password,$database);

	if(!$con){
		die("Sorry". mysqli_connect_error());
	}
	mysqli_select_db($con,$database);

	if(isset($_POST['s'])){
		$email=$_POST['email'];
		$pass=$_POST['password'];

		$sql="SELECT * FROM `user` WHERE `email` LIKE '$email' AND `password` LIKE '$pass'";
		$result=mysqli_query($con,$sql);

		if(!$result || mysqli_num_rows($result)==0){
            $message1="Wrong Credentials";
            echo "<script type='text/javascript'>alert('$message1');</script>";
        }else{
            //header("location:user_page.php");
            header("location:homepage.php");
            $_SESSION['email'] = $email;
        }
	}
?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
	<a class="navbar-brand" href="#">Welcome to Blood Bank</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Registration
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="regdonor.php">Register as a donor</a>
				<a class="dropdown-item" href="regbb.php">Register as a Blood Bank</a></div>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="events.php">Events</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="sendrequest.php">Send Request</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="login.php">Log-in</a>
			</li>
			
		</ul>
	</div>
</nav>

<div class="main_div">
		<div class="box">
			<h1>Login Form</h1>
			<form method="post" action="#">
			
			
				<div class="inputBox">

					<input type="text" name="email" autocomplete="off" required>
					<label>username*</label>
					
				</div>
				
				<div class="inputBox">
					
					<input type="password" name="password" autocomplete="off" required>
					<label>password*</label>
					
				</div>
				
				<input type="Submit" name="s" value="Login">
				
			</form>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>