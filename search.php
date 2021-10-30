<!DOCTYPE html>
<html>
<head>
	<title>Request Blood</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<style>
		
		*
		{
			margin:0;
			padding:0;
			box-sizing:border-box;
			<!--font-family:'Josefin sans', sans-serif;-->
		}
		 
		.box
		{
			width:700px;
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
			color:#a22525;
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
	$password="";
	$database="bloodbank_nitr";

    $search = $_SESSION["search"];

	$con=mysqli_connect($servername,$username,$password,$database);

	if(!$con){
		die("Sorry". mysqli_connect_error());
	}

    $query="SELECT * FROM `banks` WHERE `blood_available` = '$search' ";
    $result = mysqli_query($con,$query);
    // if($result){
    //     echo "Good";
    // }else{
    //     echo "No";
    // }
    $i = 0;
    while($row = mysqli_fetch_assoc($result)){
    
    $r = $row['org_name'];
    $l[$i] = $r;
    $i++;
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
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search Blood" aria-label="Search">
			<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
		</form>
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
			<li class="nav-item">
				<a class="nav-link" href="login.php">Log-in</a>
			</li>
			
		</ul>
	</div>
</nav>

<div class="main_div">
		<div class="box">
            Hello
            <?php
            echo $l[2];
            ?>
        </div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>