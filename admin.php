<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="style.css">
	<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$database="bloodbank_nitr";

	$con=mysqli_connect($servername,$username,$password,$database);

	if(!$con){
		die("Sorry". mysqli_connect_error());
	} 
	$sql="SELECT `org_name`,`state`,`city`,`district` FROM `banks` WHERE 1";
	$result = mysqli_query($con,$sql);
    // $num = mysqli_num_rows($result);
	
	$i=0;
	while($row = mysqli_fetch_array($result)){
		$name = $row['org_name'];
		$state = $row['state'];
		$district = $row['district'];
		$pincode = $row['city'];
	}
	$i++
	?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
	<a class="navbar-brand" href="#">Welcome User's name</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search Blood" aria-label="Search">
			<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
		</form>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="request.php">Requests</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="approval.php">Approval</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="registereduser.php">Registered Users</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php">Log-out</a>
			</li>
			
		</ul>
	</div>
</nav>
<div style="margin-left:100px; margin-top:100px; margin-right:100px">
	<table class="table">
	  <thead class="thead-dark">
		<tr >
		  <th class="bg-danger" scope="col">#</th>
		  <th class="bg-danger" scope="col">Name of the Organistion</th>
		  <th class="bg-danger" scope="col">State</th>
		  <th class="bg-danger" scope="col">District</th>
		  <th class="bg-danger" scope="col">Pincode</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <th scope="row">1</th>
		  <td><?php echo $name ?></td>
		  <td><?php echo $state ?></td>
		  <td><?php echo $district ?></td>
		  <td><?php echo $city ?></td>
		</tr>
		
	  </tbody>
	</table>

</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>