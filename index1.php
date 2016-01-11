<?php
require_once("dbconnect.php");

session_start();
if($_SESSION['userid']==0)
{
header("Location: index.php");
}
   ?>
<!DOCTYPE html>
<html>
   <head>
   	 <title>Bus-Trackr</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
   	 <link rel="stylesheet" type="text/css" href="jquery.mobile-1.4.1.min.css" />
   	 <script src="jquery-1.11.0.min.js"></script>
   	 <script src="jquery.mobile-1.4.1.min.js"></script>
     <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD-UA3MNIZRfDvQu-9dm2JtR_8k9NcTtU0&sensor=false">
</script>

<script>
function initialize()
{
var mapProp = {
  center:new google.maps.LatLng(15.6000,73.8200),
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap")
  ,mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
   </head>
   <body>
   	<section id="page0" data-role="page">
     <div data-role="header" data-theme="b"><a href="index1.php" data-icon="home">Home</a><h1 align="center">bUS-TRAkr</h1><a href="logout.php">Logout</a></div>
     <div data-role="content">
<ul data-role="listview" data-inset="true" data-divider-theme="b">
<li><a href="findmybuses.php">Find My Bus</a></li>
<li><a href="maps.php">Show Bus Stands</a></li>
<li><a href="settings.php">Settings</a></li>
<li><a href="companyinfo.php">Bus Company Information</a></li>
<li><a href="about.php">About Us</a></li>
</ul>
</div>
 <div data-role="footer" data-position="fixed" data-theme="b"><h6 align="center">Designed by The Group</h6></div>
</section>



   </body>
   </html>
