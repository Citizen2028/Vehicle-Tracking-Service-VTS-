

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>

	<title>Vehicle Management System</title>

	<style type="text/css">
	body{
		font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
		font-size:12px;
	}
	p, h1, form, button{border:0; margin:0; padding:0;}
	.spacer{clear:both; height:1px;}
	/* ----------- My Form ----------- */
	.myform{
		margin:0 auto;
		width:400px;
		padding:14px;
	}
		/* ----------- basic ----------- */
		#basic{
			border:solid 2px #DEDEDE;	
		}
		#basic h1 {
			font-size:14px;
			font-weight:bold;
			margin-bottom:8px;
		}
		#basic p{
			font-size:11px;
			color:#666666;
			margin-bottom:20px;
			border-bottom:solid 1px #dedede;
			padding-bottom:10px;
		}
		#basic label{
			display:block;
			font-weight:bold;
			text-align:right;
			width:140px;
			float:left;
		}
		#basic .small{
			color:#666666;
			display:block;
			font-size:11px;
			font-weight:normal;
			text-align:right;
			width:140px;
		}
		#basic input{
			float:left;
			width:200px;
			margin:2px 0 30px 10px;
		}
		#basic button{ 
			clear:both;
			margin-left:150px;
			background:#888888;
			color:#FFFFFF;
			border:solid 1px #666666;
			font-size:11px;
			font-weight:bold;
			padding:4px 6px;
		}


		/* ----------- stylized ----------- */
		#stylized{
			border:solid 2px #b7ddf2;
			background:#ebf4fb;

		}
		#stylized h1 {
			font-size:14px;
			font-weight:bold;
			margin-bottom:8px;
		}
		#stylized p{
			font-size:11px;
			color:#666666;
			margin-bottom:20px;
			border-bottom:solid 1px #b7ddf2;
			padding-bottom:10px;
		}
		#stylized label{
			display:block;
			font-weight:bold;
			text-align:right;
			width:140px;
			float:left;
		}
		#stylized .small{
			color:#666666;
			display:block;
			font-size:11px;
			font-weight:normal;
			text-align:right;
			width:140px;
		}
		#stylized input{
			float:left;
			font-size:12px;
			padding:4px 2px;
			border:solid 1px #aacfe4;
			width:200px;
			margin:2px 0 20px 10px;
		}
		#stylized button{ 
			clear:both;
			margin-left:160px;
			width:125px;
			height:31px;
			background:#444;
			text-align:center;
			line-height:31px;
			color:#FFFFFF;
			font-size:11px;
			font-weight:bold;
		}
* {
    box-sizing: border-box;
}

body {
    margin: 0;
}
.dropbtn2 {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
}

.dropdown2 {
    position: relative;
    display: inline-block;
}

.dropdown-content2 {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 70px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content2 a {
    color: black;
    padding: 8px 10px;
    text-decoration: none;
    display: block;
}

.dropdown-content2 a:hover {background-color: #ddd}

.dropdown2:hover .dropdown-content2 {
    display: block;
}

.dropdown2:hover .dropbtn2 {
    background-color: #3e8e41;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 100%;
    left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content .header {
    background: red;
    padding: 16px;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 12%;
    padding: 5px;
    background-color: #ccc;
    height: 450px;
}

.column a {
    float: none;
    color: black;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.column a:hover {
    background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
        height: 100%;
    }
}



	</style>
	</head>

	<body>
	<!--center><div><img src="a.jpg" height="100"></div></center-->

<audio src="assets/siren.mp3" loop="true" id='siren' type="audio/mp3"></audio>
<div class="navbar">
<a href="./index.html">Overview Of Vehicles</a>

  <div class="dropdown">
    <button class="dropbtn">Vehicle Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        
      <div class="row">
        <div class="column">
          <h3>Bus</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
		  <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Truck</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Coaster</h3>      
  <div class="dropdown2">
  <button class="dropbtn2">DM LA 11-321</button>
  <div class="dropdown-content2">
    <a href="./FullMap.php?choice=1" target="_blank">Postion</a>
    <a href="./chat.php?choice=1" target="_blank">Details</a>
     <a href="./driver_log.php?choice=1" target="_blank">Driver Log</a>
	<a href="./fuel_log.php?choice=1" target="_blank">Fuel Log</a>
  </div>
</div> <br> <br> 
<div class="dropdown2">
  <button class="dropbtn2">DM LA 11-322</button>
  <div class="dropdown-content2">
    <a href="./FullMap.php?choice=2" target="_blank">Postion</a>
    <a href="./chat.php?choice=2" target="_blank">Details</a>
    <a href="./driver_log.php?choice=2" target="_blank">Driver Log</a>
	<a href="./fuel_log.php?choice=2" target="_blank">Fuel Log</a>
  </div>
</div><br> <br> 
<div class="dropdown2">
  <button class="dropbtn2">DM LA 11-323</button>
  <div class="dropdown-content2">
    <a href="./FullMap.php?choice=3" target="_blank">Postion</a>
    <a href="./chat.php?choice=3" target="_blank">Details</a>
    <a href="./driver_log.php?choice=3" target="_blank">Driver Log</a>
	<a href="./fuel_log.php?choice=3" target="_blank">Fuel Log</a>
  </div>
</div> <br><br>
<div class="dropdown2">
  <button class="dropbtn2">DM LA 11-324</button>
  <div class="dropdown-content2">
    <a href="./FullMap.php?choice=4" target="_blank">Postion</a>
    <a href="./chat.php?choice=4" target="_blank">Details</a>
    <a href="./driver_log.php?choice=4" target="_blank">Driver Log</a>
	<a href="./fuel_log.php?choice=4" target="_blank">Fuel Log</a>
  </div>
</div>

       
		   
		   
        </div>
        <div class="column">
          <h3>Pickup</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Microbus</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Jeep</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
		<div class="column">
          <h3>Stuff Car</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
		<div class="column">
          <h3>Ambulance</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
    </div>
  </div> 
  
		<a href="./chat.php?choice=5" target="_blank">Broadcast Message</a>
		<a href="./register_driver.php" target="_blank">Driver Registration</a>
		<a href="./driver_details.php" target="_blank">Driver Details</a>
		<a href="./alarm_history.php" target="_blank">Distress History</a> 
		<a href="./distress_signals.php" id="distress" target="_blank">Distress</a></div>

		<center><h1><b>Registration of New Drivers</b></h1> </center>

	<div id="stylized" class="myform">

	<form id="driver_form" action="index.html" method="POST">

		<label>Name
			<span class="small">Add your name</span>
		</label>
		<input type="text" id="name" value="">
		
		<label>Email or Username
			<span class="small">Enter a Valid Email</span>
		</label>
		<input type="text" id="username">
	
		<label>Password
				<span class="small">At least 5 Characters</span>
		</label>
		<input type="text" id="password">
		
		<label>Contact Number
			<span class="small">Add a Phone Number</span>
		</label>
		<input type="text" id="phone">
	
		<label>Alternative Contact Number
		</label>
		<input type="text" id="alternative_phone">
	  
		<label>Next of Kin Name</label>
		<input type="text" id="kin">
	
		<label>Next of Kin Phone Number </label>
		<input type="text" id="kin_phone">
	 
		<label>Blood Group</label>
		<input type="text" id="blood_group">
	   
		<label>Date of Join:</label>
		<input type="text" id="join_date">
	   
		<label>Date of Birth:</label>
		<input type="text" id="dob">
	  
		<label>Religion:</label>
		<input type="text" id="religion">
	 
		<br />
		<br />
		<br />
		  


		<button id="ss" type="submit" value="Send" style="margin-top:15px;">Submit</button>
	<div class="spacer"></div>

	</form>
	<style>
.blinkRed {
	
				  -webkit-animation: blinkRed 0.5s infinite;
				  -moz-animation: blinkRed 0.5s infinite;
				  -ms-animation: blinkRed 0.5s infinite;
				  -o-animation: blinkRed 0.5s infinite;
				  animation: blinkRed 0.5s infinite;
				}
</style>
	<script>
	
	var config = {
        apiKey: "AIzaSyBJvwT7PZ6Pz49g_Za1RL3KH0kdXmpcTUU",
        authDomain: "transport-tracker-affaa.firebaseapp.com",
        databaseURL: "https://transport-tracker-affaa.firebaseio.com",
        projectId: "transport-tracker-affaa",
        storageBucket: "transport-tracker-affaa.appspot.com",
        messagingSenderId: "490432028798"
    };
	

		firebase.initializeApp(config);
	// Then listen to the form submit event
	$('#driver_form').submit(function(evt) {
		var name = $('#name').val();
		var username = $('#username').val();
		var password =  $('#password').val();
		var phone =  $('#phone').val();
		var alternativephone =  $('#alternative_phone').val();
		var kin =  $('#kin').val();
		var kin_phone =  $('#kin_phone').val();
		var blood_group =  $('#blood_group').val();
		var join_date =  $('#join_date').val();
		var dob =  $('#dob').val();
		var religion =  $('#religion').val();

		evt.preventDefault();
		
		firebase.database().ref('/driver/'+username+'/name').set(name);
		firebase.database().ref('/driver/'+username+'/password').set(password);
		firebase.database().ref('/driver/'+username+'/phone').set(phone);
		firebase.database().ref('/driver/'+username+'/alternativephone').set(alternativephone);
		firebase.database().ref('/driver/'+username+'/kin').set(kin);
		firebase.database().ref('/driver/'+username+'/kin_phone').set(kin_phone);
		firebase.database().ref('/driver/'+username+'/blood_group').set(blood_group);
		firebase.database().ref('/driver/'+username+'/join_date').set(join_date);
		firebase.database().ref('/driver/'+username+'/dob').set(dob);
		firebase.database().ref('/driver/'+username+'/religion').set(religion);
		window.open("./driver_details.php","_self");
	});
	</script>
<script>
	var x = document.getElementById('siren');
	x.loop = true;
	var ref = firebase.database().ref("alarm");                           
	ref.on("value", function(snapshot){
		var alarms = snapshot.val();
		var element = document.getElementById("distress");
		var boolVal;
		for(alarm in alarms){
			boolVal = boolVal || alarms[alarm];
		}

		if(!boolVal){
				element.className= ''; // += ' blueClass'; to keep existing classes
				x.currentTime = 0;
				x.pause();
			}
			   
		else{
			element.className= 'blinkRed';
			x.play();
			x.currentTime = 0;
		}
		
		
	});
</script>
	</div> <!-- end of form class -->
	
	

	</body><style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */

    #map {
        height: 70%;
    }

    /* Optional: Makes the sample page fill the window. */

    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>


<style>
.led-box {
  height: 30px;
  width: 25%;
  margin: 10px 0;
  float: left;
}

.led-box p {
  font-size: 15px;
  text-align: center;
  margin: 1em;
}

.led-red {
  margin: 0 auto;
  width: 60px;
  height: 60px;
  background-color: #F00;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 12px;
  -webkit-animation: blinkRed 0.5s infinite;
  -moz-animation: blinkRed 0.5s infinite;
  -ms-animation: blinkRed 0.5s infinite;
  -o-animation: blinkRed 0.5s infinite;
  animation: blinkRed 0.5s infinite;
}

@-webkit-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@-moz-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@-ms-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@-o-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}


.led-green {
  margin: 0 auto;
  width: 60px;
  height: 60px;
  background-color: #ABFF00;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #304701 0 -1px 9px, #89FF00 0 2px 12px;
}


</style>
	</html>
