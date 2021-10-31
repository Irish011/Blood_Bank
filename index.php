<!DOCTYPE html>
<html>
<head>
<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$database="bloodbank_nitr";

	$con=mysqli_connect($servername,$username,$password,$database);

	if(!$con){
		die("Sorry". mysqli_connect_error());
	}
	$sql="SELECT * FROM `banks`";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);

	//Fetch Lat and Lng values into an Array
    $i = 0;

	 while($row = mysqli_fetch_assoc($result)){
         $lat = $row['lat'];
         $lng = $row['longi'];
         $nam = $row['org_name'];
         $cid = $row['id'];
        $j[$i] = $lat. ", " . $lng;
         $l[$i] = $nam;
         $t[$i] = $cid;
		 $i++;
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
<div class="iframe-container" style="margin-left:-400px">
<div id="googleMap" style="border:1px ; height:600px; width:1000px; align:center; margin-top:40px; margin-left:425px">
		<script>
			function myMap() {
var mapProp= {
  center:new google.maps.LatLng(23.033863, 72.585022),
  zoom:12,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);


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
		// Creating Markers
        for(let i=0;i<features.length;i++){
            const marker = new google.maps.Marker({
                position: features[i].position,
                map: map,
                title: features[i].title,
                url: features[i].url,
            });
            google.maps.event.addListener(marker, 'click', function(){
                window.open(this.url, '_blank');
            });
        }
}


	</script>
	
</div>
</div>
</center>

<div class="card text-white bg-danger" style="margin-bottom:10px;">
  <div class="card-body">
    <center>About | Terms & Conditions</center>
  </div>
  <!-- <div class="card-body"> -->
		<!-- <center> -->
		<!--<h5 class="card-title">About Us</h5>-->
		<!-- <p class="card-text">wdcjdhijdcishvosidvoisdjvodsijvoijoi<br>hdoeuwhouehfouehfoewh<br>dheiuhiweuhfwie<p> -->
		<!--<a href="#" class="btn btn-light">Our page </a>-->
		<!-- <center> -->
	
		<!--<h5 class="card-title">Terms & Conditions</h5>-->
		<!--<p class="card-text">wdfjoiehoifhewpijfpewijfpow<p>-->
		<!--<a href="#" class="btn btn-light">Our page </a>-->
		<!-- <center> -->
  <!-- </div> -->
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC78Kk1lM_1AbDkP7yHGcFxHYN988mY53w&callback=myMap">
	</script>
    
	
</body>
</html>
<!--blah-->