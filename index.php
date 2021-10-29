<!DOCTYPE html>
<html>
<head>
<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$database="animal_helpline";

	$con=mysqli_connect($servername,$username,$password,$database);

	if(!$con){
		die("Sorry". mysqli_connect_error());
	}
	
?>
	<title>HomePage</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
	<a class="navbar-brand" href="#">Welcome to Blood Bank</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		
	
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
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
			<li class="nav-item">
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
<center>
<div class="iframe-container">
<div id="googleMap" style="border:1px ; height:500px; width:600px; align:center; margin-top:40px; margin-left:425px">
	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3671.3601441376495!2d72.55607551496823!3d23.0472544849406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1634834394619!5m2!1sen!2sin" width="600" height="475" style="border:0;" margin-top="40%" allowfullscreen="" loading="lazy"></iframe> -->
		<!-- <div id="map"></div> -->
		<script>
			function myMap() {
var mapProp= {
  center:new google.maps.LatLng(23.033863, 72.585022),
  zoom:12,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
	</script>
	<!-- <script>

    let map;

    function initMap(){
        var map = new google.maps.Map(document.getElementById("map"),{
            center: new google.maps.LatLng(23.033863, 72.585022),
            zoom: 12,
        });
        
        const features = [
            <?php 
                for($k=0;$k<$num;$k++){
                    printf("{
                        position: new google.maps.LatLng($j[$k]),
                        title: 'ID: $t[$k],    Name: $l[$k]',
                        url: 'https://www.google.com/maps/dir//$j[$k]',    
                    },");
                    $hi = "<script>console.log('$t[$k]');</script>";
                }   
            ?>
        ];
    }
</script> -->
</div>
</div>
</center>

<div class="card text-white bg-danger">
  <div class="card-header">
    <center>About | Terms & Conditions</center>
  </div>
  <div class="card-body">
		<center>
		<!--<h5 class="card-title">About Us</h5>-->
		<p class="card-text">wdcjdhijdcishvosidvoisdjvodsijvoijoi<br>hdoeuwhouehfouehfoewh<br>dheiuhiweuhfwie<p>
		<!--<a href="#" class="btn btn-light">Our page </a>-->
		<center>
	
		<!--<h5 class="card-title">Terms & Conditions</h5>-->
		<!--<p class="card-text">wdfjoiehoifhewpijfpewijfpow<p>-->
		<!--<a href="#" class="btn btn-light">Our page </a>-->
		<center>
  </div>
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC78Kk1lM_1AbDkP7yHGcFxHYN988mY53w&callback=myMap">
	</script>
    
	<!-- async &libraries=&v=weekly -->
</body>
</html>
<!--blah-->