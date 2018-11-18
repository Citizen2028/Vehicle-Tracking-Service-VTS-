 
<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
</script>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #000000;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
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
		<a href="./distress_signals.php" id="distress" target="_blank">Distress</a>
</div>
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
	var x = document.getElementById('siren');
	x.loop = true;
	var ref = firebase.database().ref("alarm");                           
	ref.once("value", function(snapshot){
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
<h1> <center> All Driver Details</center> </h1>
<center>
<table style="width:80%" id="driver-table">
  <tr id="tr">
    <th>Name</th>
    <th>Username</th>
	<th>Phone</th>
	<th>Alt. Phone</th>	
    <th>Kin Name</th>
    <th>Kin Phone</th>
	<th>Blood Group</th>
    <th>DOB</th>
    <th>Join Date</th>
    <th>Religion</th>
	<th>Edit</th>
	<th>Delete</th>
 </table>
<br>
<br>
<br>
<br> 
</center>
<script>
	
		
    var database = firebase.database().ref('driver');
    database.once('value', function(snapshot){
        if(snapshot.exists()){
            var content = '';
			var drivers = snapshot.val();
			for(driver in drivers){
                var val = drivers[driver];
                content +='<tr>';
                content += '<td>' + val.name + '</td>';
                content += '<td>' + driver + '</td>';
                content += '<td>' + val.phone + '</td>';
                content += '<td>' + val.alternativephone + '</td>';
                content += '<td>' + val.kin + '</td>';
                content += '<td>' + val.kin_phone + '</td>';
                content += '<td>' + val.blood_group + '</td>';
				content += '<td>' + val.dob + '</td>';
                content += '<td>' + val.join_date + '</td>';
				content += '<td>' + val.religion + '</td>';
				content += '<td> <a href="./update_driver.php?choice='+driver+'">Edit</a> </td>';
			content += '<td> <a id="myLink" href="#" onclick="deleteDriver(\''+driver+'\')">Delete</a> </td>';
				content += '</tr>';
           }
            $('#driver-table').append(content);
			
        }
    });
	
	function deleteDriver(x) {
			firebase.database().ref('/driver/'+x).remove();
			location.reload();
	}
	
	

</script><style>
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