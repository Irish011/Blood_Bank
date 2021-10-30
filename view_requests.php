<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
	<a class="navbar-brand" href="#">Welcome User's name</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="view_requests.php">View Requests</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="available_blood.php">Availability Of Blood</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="eventsbb.php">Events</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contact_us.php">Contact Us</a>
			</li>
			
		</ul>
	</div>
</nav>


	<table class="table" style="margin: 100px;width:1150px;">
	  <thead class="thead-dark">
	    <tr>
	      <th class="bg-danger" scope="col">#</th>
	      <th class="bg-danger" scope="col">Blood Group</th>
	      <th class="bg-danger" scope="col">Name</th>
	      <th class="bg-danger" scope="col">Quantity</th>
	    </tr>
	  </thead>
	  <tbody class="tbody-danger">
	   	<tr></tr>
	  </tbody>
	</table>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>