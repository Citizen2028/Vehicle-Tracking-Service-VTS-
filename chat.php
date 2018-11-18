<html> 
    <head>
        <title>Messenger</title>
        <link rel="stylesheet" href="css/client.css">
        <link rel="icon" href="images/favicon.png"/>
        <script src="js/jquery.js"></script>
        <script src="js/firebase.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
	
	<style>
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #000000;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
	</style>
    <body style="display:none">
        <div class="cont">
		<div class="row">
			<div class="col-sm-6" id = "hideit" style="padding:50">
			<h1 style="text-align: center;">Vehicle Details</h1>
			<hr>
			<table>
			<tr><td>Vehicle No: </td><td><span id="vno"></span></tr></td>
			<tr><td>Fuel Level: </td><td><span id="fuelLevel"></span></tr></td>
			<tr><td>Estimated KPL: </td><td><span id="kpl"></span></tr></td>
			<tr><td>Last Refuel Date: </td><td><span id="refuelDate"></span></tr></td>
			<tr><td>Distance Traveled: </td><td><span id="dist"></span></tr></td>
			<tr><td>Distance Traveled (24hr): </td><td><span id="dist24"></span></tr></td>
			<tr><td>Speed: </td><td><span id="speed"></span></tr></td>
			<tr><td>Max Speed: </td><td><span id="maxspeed"></span></tr></td>
			</table>
			<h1 style="text-align: center;">Driver Details</h1>
			<table>
			<tr><td>Name: </td><td><span id="driverName"></span></tr></td>
			<tr><td>Contact no: </td><td><span id="contact"></span></tr></td>
			<tr><td>Journey Start time: </td><td><span id="lastLogin"></span></tr></td>
			<tr><td>Distance Traveled: </td><td><span id="distDriver"></span></tr></td>
			</table>
			</div>
           <div class="msgpanel col-sm-5">
                <div class="nameband" id='nameband'>
                    <div class="band">
                        <span class='recname' id='recname' ></span>
                    </div>
                </div>
                <div class="msgframe" id='msgframe'>
                    <div class="loader" id='loader'></div>
                </div>
           </div>
		   <div class="col-sm-1">
           </div>
		   </div>
        
        <div class="row">
		<div class="col-sm-6"></div>
		<div class='msgdiv col-sm-4'><input id='msg' type="text" name='msg' placeholder="Type your message in here" class="msginput"></div>
		
        <div class="col-sm-1"><button class="btn" onClick="sendmsg()"><i class="fa fa-send"></i></button></div>
		<div class="col-sm-1"></div>
		</div>
		<br>
		<br><br>
		<br>
		
		</div>
		<audio src="assets/msgincoming.mp3" id='msgincoming'></audio>
		<script type="text/javascript">
			var choice = "<?php echo $_GET['choice']?>"; // That's for a string
			console.log("value="+choice);
		</script>
        <script src="js/client.js"></script>
		
    </body>
</html>
