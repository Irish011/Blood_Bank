<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donar Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">


    <style>
		
		*
		{
			margin-top:0;
			padding:0;
			box-sizing:border-box;
			<!--font-family:'Josefin sans', sans-serif;-->
		}

		.bg
		{
			background: rgba(255, 255, 255);
			
		}

		.form
		{
 			padding:50px;
		}
		 
		.box
		{
			margin-top: -150px;
			width:700px;
			position:absolute;
			top:50%;
			left:50%;
			transform:translate(-50%);
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

		.box h3
		{
			margin-bottom:20px;
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
			padding:-5px 0;
			font-size:16px;
			color:#fff;
			transition:0.5s;
		}
		
		.box .inputBox input:focus + label,
		.box .inputBox input:valid ~ label
		{
			top:-18px;
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
    <!-- Php -->
    <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = $_POST['name'];
      $gender = $_POST['gender'];
      $date = $_POST['date'];
      $blood = $_POST['BloodGroup'];
      $aadhar = $_POST['aadhaar'];
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $state = $_POST['state'];
      $district = $_POST['district'];
      $city = $_POST['city'];
      $ldate = $_POST['ldate'];
      $preference = $_POST['preference'];
      $passworde = $_POST['password'];

    $servername="localhost";
	$username="root";
	$password="";
	$database="bloodbank_nitr";

    $con=mysqli_connect($servername,$username,$password,$database);

	if(!$con){
		die("Sorry". mysqli_connect_error());
	}else{
        $sql = "INSERT INTO `user`(`name`,`gender`,`date`,`blood`,`aadhar`,`mobile`,`email`,`state`,`district`,`city`,`ldate`,`preference`,`password`) VALUES ('$name','$gender','$date','$blood','$aadhar','$mobile','$email','$state','$district','$city','$ldate','$preference','$passworde')";
        $result = mysqli_query($con,$sql);
        if($result){
            	$message="Successfully Registered";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }else{
            	$message1="User already Exists!";
                echo "<script type='text/javascript'>alert('$message1');</script>";
            }
    }
  }
  ?>
</head>
<body>

<!-- Top Bar  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
	<a class="navbar-brand" href="#">Welcome to Blood Bank</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item ">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item dropdown active">
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

<!-- Main  -->
<div class="main_div">
		<div class="box">
			<h1>Register As a Donor</h1>
    <form method="POST" action="#">
    <h3>Personal Details</h3>
			

            <div class="inputBox">
                <input type="text" name="name" autocomplete="off" required>
                <label>Full Name*</label>
            </div>

            <div class="inputBox">

						<label>Gender*</label>
						<br><br>
						<select name="gender" autocomplete="off" required style="border-radius:5px;font-size:16px;color:#a22525;">
							<option>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select>

						<br><br>
						
			</div>

            <div class="inputBox">
						<input type="date" name="date" autocomplete="off" required style="color:rgba(209, 32, 47, 0.9);">
						<label>Date Of Birth*</label>
			</div>           
            
            <div class="inputBox">

						<label>Blood Group*</label>
						<br><br>
						<select name="BloodGroup" autocomplete="off" required style="border-radius:5px;font-size:16px;color:#a22525;">
							<option>O+</option>
							<option>O-</option>
							<option>A+</option>
							<option>A-</option>
							<option>B+</option>
							<option>B-</option>
							<option>AB+</option>
							<option>AB-</option>
							<option>Don't Know</option>
						</select>

						<br><br>
						
					</div>

                    <div class="inputBox">
						<input type="text" name="aadhaar" autocomplete="off" required maxlength="12">
						<label>Aadhaar Card NO.*</label>
					</div>
				

					<h3>Contact Details</h3>
				

					<div class="inputBox">
						<input type="text" inputmode="numeric" name="MoblieNo" autocomplete="off" required maxlength="10">
						<label>Mobile No.*</label>
					</div>


					<div class="inputBox">
						<input type="email" name="Emailid" autocomplete="off" required>
						<label>Email Address*</label>
					</div>

                    <h3>Location</h3>
                    <br>

                    	<div class="inputBox">
						
						<!-- <form> -->
							  <div class="form-group col-md-4" style="float:left;float:top;clear:left;margin-top: 0;">
							    <label for="inputState" style="margin-top:-20px;margin-left: 4px;">State*</label>
							  
							    <select class="form-control" name="state" id="inputState" style=" width:250px;border-radius:5px;font-size:16px;color:#a22525;margin-left: -12px;">
							                        <option value="SelectState">Select State</option>
							                        <option value="Andra Pradesh">Andra Pradesh</option>
							                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
							                        <option value="Assam">Assam</option>
							                        <option value="Bihar">Bihar</option>
							                        <option value="Chhattisgarh">Chhattisgarh</option>
							                        <option value="Goa">Goa</option>
							                        <option value="Gujarat">Gujarat</option>
							                        <option value="Haryana">Haryana</option>
							                        <option value="Himachal Pradesh">Himachal Pradesh</option>
							                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
							                        <option value="Jharkhand">Jharkhand</option>
							                        <option value="Karnataka">Karnataka</option>
							                        <option value="Kerala">Kerala</option>
							                        <option value="Madya Pradesh">Madya Pradesh</option>
							                        <option value="Maharashtra">Maharashtra</option>
							                        <option value="Manipur">Manipur</option>
							                        <option value="Meghalaya">Meghalaya</option>
							                        <option value="Mizoram">Mizoram</option>
							                        <option value="Nagaland">Nagaland</option>
							                        <option value="Orissa">Orissa</option>
							                        <option value="Punjab">Punjab</option>
							                        <option value="Rajasthan">Rajasthan</option>
							                        <option value="Sikkim">Sikkim</option>
							                        <option value="Tamil Nadu">Tamil Nadu</option>
							                        <option value="Telangana">Telangana</option>
							                        <option value="Tripura">Tripura</option>
							                        <option value="Uttaranchal">Uttaranchal</option>
							                        <option value="Uttar Pradesh">Uttar Pradesh</option>
							                        <option value="West Bengal">West Bengal</option>
							                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
							                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
							                        <option value="Chandigarh">Chandigarh</option>
							                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
							                        <option value="Daman and Diu">Daman and Diu</option>
							                        <option value="Delhi">Delhi</option>
							                        <option value="Lakshadeep">Lakshadeep</option>
							                        <option value="Pondicherry">Pondicherry</option>
							                      </select>
							  </div>
							  	<br>
							  <div class="form-group col-md-4" style="float:left;float:top;margin-top:-15px;margin-left:30px;">
								
								
								<select class="form-control" name="district" id="inputDistrict" style="width:150px;border-radius:5px;font-size:16px;color:#a22525;margin-left: 50px;margin-top: -8px;">
								     <option value="">-- select one -- </option>
								</select>
								<label for="inputDistrict" style="margin-left:65px;margin-top:-30px;">City*</label>
							  </div>

							<!-- </form> -->

							<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
							<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

							<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
							<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
						
					</div>
                    <!-- District -->

                    <div class="inputBox">

										<script>		var AndraPradesh = ["Anantapur","Chittoor","East Godavari","Guntur","Kadapa","Krishna","Kurnool","Prakasam","Nellore","Srikakulam","Visakhapatnam","Vizianagaram","West Godavari"];
										var ArunachalPradesh = ["Anjaw","Changlang","Dibang Valley","East Kameng","East Siang","Kra Daadi","Kurung Kumey","Lohit","Longding","Lower Dibang Valley","Lower Subansiri","Namsai","Papum Pare","Siang","Tawang","Tirap","Upper Siang","Upper Subansiri","West Kameng","West Siang","Itanagar"];
										var Assam = ["Baksa","Barpeta","Biswanath","Bongaigaon","Cachar","Charaideo","Chirang","Darrang","Dhemaji","Dhubri","Dibrugarh","Goalpara","Golaghat","Hailakandi","Hojai","Jorhat","Kamrup Metropolitan","Kamrup (Rural)","Karbi Anglong","Karimganj","Kokrajhar","Lakhimpur","Majuli","Morigaon","Nagaon","Nalbari","Dima Hasao","Sivasagar","Sonitpur","South Salmara Mankachar","Tinsukia","Udalguri","West Karbi Anglong"];
										var Bihar = ["Araria","Arwal","Aurangabad","Banka","Begusarai","Bhagalpur","Bhojpur","Buxar","Darbhanga","East Champaran","Gaya","Gopalganj","Jamui","Jehanabad","Kaimur","Katihar","Khagaria","Kishanganj","Lakhisarai","Madhepura","Madhubani","Munger","Muzaffarpur","Nalanda","Nawada","Patna","Purnia","Rohtas","Saharsa","Samastipur","Saran","Sheikhpura","Sheohar","Sitamarhi","Siwan","Supaul","Vaishali","West Champaran"];
										var Chhattisgarh = ["Balod","Baloda Bazar","Balrampur","Bastar","Bemetara","Bijapur","Bilaspur","Dantewada","Dhamtari","Durg","Gariaband","Janjgir Champa","Jashpur","Kabirdham","Kanker","Kondagaon","Korba","Koriya","Mahasamund","Mungeli","Narayanpur","Raigarh","Raipur","Rajnandgaon","Sukma","Surajpur","Surguja"];
										var Goa = ["North Goa","South Goa"];
										var Gujarat = ["Ahmedabad","Amreli","Anand","Aravalli","Banaskantha","Bharuch","Bhavnagar","Botad","Chhota Udaipur","Dahod","Dang","Devbhoomi Dwarka","Gandhinagar","Gir Somnath","Jamnagar","Junagadh","Kheda","Kutch","Mahisagar","Mehsana","Morbi","Narmada","Navsari","Panchmahal","Patan","Porbandar","Rajkot","Sabarkantha","Surat","Surendranagar","Tapi","Vadodara","Valsad"];
										var Haryana = ["Ambala","Bhiwani","Charkhi Dadri","Faridabad","Fatehabad","Gurugram","Hisar","Jhajjar","Jind","Kaithal","Karnal","Kurukshetra","Mahendragarh","Mewat","Palwal","Panchkula","Panipat","Rewari","Rohtak","Sirsa","Sonipat","Yamunanagar"];
										var HimachalPradesh = ["Bilaspur","Chamba","Hamirpur","Kangra","Kinnaur","Kullu","Lahaul Spiti","Mandi","Shimla","Sirmaur","Solan","Una"];
										var JammuKashmir = ["Anantnag","Bandipora","Baramulla","Budgam","Doda","Ganderbal","Jammu","Kargil","Kathua","Kishtwar","Kulgam","Kupwara","Leh","Poonch","Pulwama","Rajouri","Ramban","Reasi","Samba","Shopian","Srinagar","Udhampur"];
										var Jharkhand = ["Bokaro","Chatra","Deoghar","Dhanbad","Dumka","East Singhbhum","Garhwa","Giridih","Godda","Gumla","Hazaribagh","Jamtara","Khunti","Koderma","Latehar","Lohardaga","Pakur","Palamu","Ramgarh","Ranchi","Sahebganj","Seraikela Kharsawan","Simdega","West Singhbhum"];
										var Karnataka = ["Bagalkot","Bangalore Rural","Bangalore Urban","Belgaum","Bellary","Bidar","Vijayapura","Chamarajanagar","Chikkaballapur","Chikkamagaluru","Chitradurga","Dakshina Kannada","Davanagere","Dharwad","Gadag","Gulbarga","Hassan","Haveri","Kodagu","Kolar","Koppal","Mandya","Mysore","Raichur","Ramanagara","Shimoga","Tumkur","Udupi","Uttara Kannada","Yadgir"];
										var Kerala = ["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"];
										var MadhyaPradesh = ["Agar Malwa","Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Datia","Dewas","Dhar","Dindori","Guna","Gwalior","Harda","Hoshangabad","Indore","Jabalpur","Jhabua","Katni","Khandwa","Khargone","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Raisen","Rajgarh","Ratlam","Rewa","Sagar","Satna",
										"Sehore","Seoni","Shahdol","Shajapur","Sheopur","Shivpuri","Sidhi","Singrauli","Tikamgarh","Ujjain","Umaria","Vidisha"];
										var Maharashtra = ["Ahmednagar","Akola","Amravati","Aurangabad","Beed","Bhandara","Buldhana","Chandrapur","Dhule","Gadchiroli","Gondia","Hingoli","Jalgaon","Jalna","Kolhapur","Latur","Mumbai City","Mumbai Suburban","Nagpur","Nanded","Nandurbar","Nashik","Osmanabad","Palghar","Parbhani","Pune","Raigad","Ratnagiri","Sangli","Satara","Sindhudurg","Solapur","Thane","Wardha","Washim","Yavatmal"];
										var Manipur = ["Bishnupur","Chandel","Churachandpur","Imphal East","Imphal West","Jiribam","Kakching","Kamjong","Kangpokpi","Noney","Pherzawl","Senapati","Tamenglong","Tengnoupal","Thoubal","Ukhrul"];
										var Meghalaya = ["East Garo Hills","East Jaintia Hills","East Khasi Hills","North Garo Hills","Ri Bhoi","South Garo Hills","South West Garo Hills","South West Khasi Hills","West Garo Hills","West Jaintia Hills","West Khasi Hills"];
										var Mizoram = ["Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip","Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip"];
										var Nagaland = ["Dimapur","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto"];
										var Odisha = ["Angul","Balangir","Balasore","Bargarh","Bhadrak","Boudh","Cuttack","Debagarh","Dhenkanal","Gajapati","Ganjam","Jagatsinghpur","Jajpur","Jharsuguda","Kalahandi","Kandhamal","Kendrapara","Kendujhar","Khordha","Koraput","Malkangiri","Mayurbhanj","Nabarangpur","Nayagarh","Nuapada","Puri","Rayagada","Sambalpur","Subarnapur","Sundergarh"];
										var Punjab = ["Amritsar","Barnala","Bathinda","Faridkot","Fatehgarh Sahib","Fazilka","Firozpur","Gurdaspur","Hoshiarpur","Jalandhar","Kapurthala","Ludhiana","Mansa","Moga","Mohali","Muktsar","Pathankot","Patiala","Rupnagar","Sangrur","Shaheed Bhagat Singh Nagar","Tarn Taran"];
										var Rajasthan = ["Ajmer","Alwar","Banswara","Baran","Barmer","Bharatpur","Bhilwara","Bikaner","Bundi","Chittorgarh","Churu","Dausa","Dholpur","Dungarpur","Ganganagar","Hanumangarh","Jaipur","Jaisalmer","Jalore","Jhalawar","Jhunjhunu","Jodhpur","Karauli","Kota","Nagaur","Pali","Pratapgarh","Rajsamand","Sawai Madhopur","Sikar","Sirohi","Tonk","Udaipur"];
										var Sikkim = ["East Sikkim","North Sikkim","South Sikkim","West Sikkim"];
										var TamilNadu = ["Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari","Karur","Krishnagiri","Madurai","Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Theni","Thoothukudi","Tiruchirappalli","Tirunelveli","Tiruppur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"];
										var Telangana = ["Adilabad","Bhadradri Kothagudem","Hyderabad","Jagtial","Jangaon","Jayashankar","Jogulamba","Kamareddy","Karimnagar","Khammam","Komaram Bheem","Mahabubabad","Mahbubnagar","Mancherial","Medak","Medchal","Nagarkurnool","Nalgonda","Nirmal","Nizamabad","Peddapalli","Rajanna Sircilla","Ranga Reddy","Sangareddy","Siddipet","Suryapet","Vikarabad","Wanaparthy","Warangal Rural","Warangal Urban","Yadadri Bhuvanagiri"];
										var Tripura = ["Dhalai","Gomati","Khowai","North Tripura","Sepahijala","South Tripura","Unakoti","West Tripura"];
										var UttarPradesh = ["Agra","Aligarh","Allahabad","Ambedkar Nagar","Amethi","Amroha","Auraiya","Azamgarh","Baghpat","Bahraich","Ballia","Balrampur","Banda","Barabanki","Bareilly","Basti","Bhadohi","Bijnor","Budaun","Bulandshahr","Chandauli","Chitrakoot","Deoria","Etah","Etawah","Faizabad","Farrukhabad","Fatehpur","Firozabad","Gautam Buddha Nagar","Ghaziabad","Ghazipur","Gonda","Gorakhpur","Hamirpur","Hapur","Hardoi","Hathras","Jalaun","Jaunpur","Jhansi","Kannauj","Kanpur Dehat","Kanpur Nagar","Kasganj","Kaushambi","Kheri","Kushinagar","Lalitpur","Lucknow","Maharajganj","Mahoba","Mainpuri","Mathura","Mau","Meerut","Mirzapur","Moradabad","Muzaffarnagar","Pilibhit","Pratapgarh","Raebareli","Rampur","Saharanpur","Sambhal","Sant Kabir Nagar","Shahjahanpur","Shamli","Shravasti","Siddharthnagar","Sitapur","Sonbhadra","Sultanpur","Unnao","Varanasi"];
										var Uttarakhand  = ["Almora","Bageshwar","Chamoli","Champawat","Dehradun","Haridwar","Nainital","Pauri","Pithoragarh","Rudraprayag","Tehri","Udham Singh Nagar","Uttarkashi"];
										var WestBengal = ["Alipurduar","Bankura","Birbhum","Cooch Behar","Dakshin Dinajpur","Darjeeling","Hooghly","Howrah","Jalpaiguri","Jhargram","Kalimpong","Kolkata","Malda","Murshidabad","Nadia","North 24 Parganas","Paschim Bardhaman","Paschim Medinipur","Purba Bardhaman","Purba Medinipur","Purulia","South 24 Parganas","Uttar Dinajpur"];
										var AndamanNicobar = ["Nicobar","North Middle Andaman","South Andaman"];
										var Chandigarh = ["Chandigarh"];
										var DadraHaveli = ["Dadra Nagar Haveli"];
										var DamanDiu = ["Daman","Diu"];
										var Delhi = ["Central Delhi","East Delhi","New Delhi","North Delhi","North East Delhi","North West Delhi","Shahdara","South Delhi","South East Delhi","South West Delhi","West Delhi"];
										var Lakshadweep = ["Lakshadweep"];
										var Puducherry = ["Karaikal","Mahe","Puducherry","Yanam"];


										$("#inputState").change(function(){
										  var StateSelected = $(this).val();
										  var optionsList;
										  var htmlString = "";

										  switch (StateSelected) {
										    case "Andra Pradesh":
										        optionsList = AndraPradesh;
										        break;
										    case "Arunachal Pradesh":
										        optionsList = ArunachalPradesh;
										        break;
										    case "Assam":
										        optionsList = Assam;
										        break;
										    case "Bihar":
										        optionsList = Bihar;
										        break;
										    case "Chhattisgarh":
										        optionsList = Chhattisgarh;
										        break;
										    case "Goa":
										        optionsList = Goa;
										        break;
										    case  "Gujarat":
										        optionsList = Gujarat;
										        break;
										    case "Haryana":
										        optionsList = Haryana;
										        break;
										    case "Himachal Pradesh":
										        optionsList = HimachalPradesh;
										        break;
										    case "Jammu and Kashmir":
										        optionsList = JammuKashmir;
										        break;
										    case "Jharkhand":
										        optionsList = Jharkhand;
										        break;
										    case  "Karnataka":
										        optionsList = Karnataka;
										        break;
										    case "Kerala":
										        optionsList = Kerala;
										        break;
										    case  "Madya Pradesh":
										        optionsList = MadhyaPradesh;
										        break;
										    case "Maharashtra":
										        optionsList = Maharashtra;
										        break;
										    case  "Manipur":
										        optionsList = Manipur;
										        break;
										    case "Meghalaya":
										        optionsList = Meghalaya ;
										        break;
										    case  "Mizoram":
										        optionsList = Mizoram;
										        break;
										    case "Nagaland":
										        optionsList = Nagaland;
										        break;
										    case  "Orissa":
										        optionsList = Orissa;
										        break;
										    case "Punjab":
										        optionsList = Punjab;
										        break;
										    case  "Rajasthan":
										        optionsList = Rajasthan;
										        break;
										    case "Sikkim":
										        optionsList = Sikkim;
										        break;
										    case  "Tamil Nadu":
										        optionsList = TamilNadu;
										        break;
										    case  "Telangana":
										        optionsList = Telangana;
										        break;
										    case "Tripura":
										        optionsList = Tripura ;
										        break;
										    case  "Uttaranchal":
										        optionsList = Uttaranchal;
										        break;
										    case  "Uttar Pradesh":
										        optionsList = UttarPradesh;
										        break;
										    case "West Bengal":
										        optionsList = WestBengal;
										        break;
										    case  "Andaman and Nicobar Islands":
										        optionsList = AndamanNicobar;
										        break;
										    case "Chandigarh":
										        optionsList = Chandigarh;
										        break;
										    case  "Dadar and Nagar Haveli":
										        optionsList = DadraHaveli;
										        break;
										    case "Daman and Diu":
										        optionsList = DamanDiu;
										        break;
										    case  "Delhi":
										        optionsList = Delhi;
										        break;
										    case "Lakshadeep":
										        optionsList = Lakshadeep ;
										        break;
										    case  "Pondicherry":
										        optionsList = Pondicherry;
										        break;
										}


										  for(var i = 0; i < optionsList.length; i++){
										    htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
										  }
										  $("#inputDistrict").html(htmlString);

										});
									</script>
								
					</div>

					<br><br>

                    <div class="inputBox">
						<input type="text" name="Pincode" inputmode="numeric" name="Pincode" autocomplete="off" required maxlength="6">
						<label>Pin Code*</label>
					</div>


					<h3>Donor Specific Information</h3>

					<div class="inputBox">
						<input type="date" name="ldate" autocomplete="off" style="color:rgba(209, 32, 47, 0.9);">
						<label>Last Date Of Donation</label>
					</div>

                    <div class="inputBox">

						<label>Preference</label>
						<br>
						<br>
						<select name="preference" autocomplete="off" style="border-radius:5px;font-size:16px;color:#a22525;">
							<option>Once in 3 Months</option>
							<option>Only in Emergency</option>
						</select>
						
					</div>
<br>

<!-- 
				<div class="inputBox">

					<input type="text" name="username" autocomplete="off" required>
					<label>Username*</label>
					
				</div> -->
                    <div class="inputBox">
					
					<input type="password" name="password" autocomplete="off" required>
					<label>Password*</label>
					
				</div>

        <!-- Name: <input type="text" name="name"/><br><br> -->
        <input type="submit" name="s" value="Register" />
    </form>
                                    </div>
                                    </div>
</body>
</html>