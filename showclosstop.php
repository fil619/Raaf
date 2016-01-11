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

   </head>
   <body>
 <!-- Show Closest Stop Starts -->

<section id="page2" data-role="page">
<header data-role="header" data-theme="b"><a href="index1.php" data-icon="home">Home</a><h1>Show Closest Stop</h1><a href="logout.php">Logout</a></header>
<div class="content" data-role="content">
<form id="closest">
  <div data-role="fieldcontain">
    <fieldset data-role="controlgroup">
    <label for="input_address">Address or Landmark :</label>
    <input type="search" name="input_address" id="input_address"></input>
      <input type="radio" name="radio_address" id="radio_landmark" value="landmark"></input>
      <label for="radio_landmark">Landmark:</label>
      <input type="radio" name="radio_address" id="radio_address" value="address"> 
      <label for="radio_address">Address:</label>
      <input type="submit" data-icon="search" name="search" id="search" value="Search"></input>
</fieldset>
</div>
</form>
<div id="googleMap" style="width:device-width;height:250px;"></div>
</div>
<footer data-role="footer" data-position="fixed"><h1>Designed By Mayur</h1></footer>
</section>

<!-- Show Closest Stop Ends -->
</body>
   </html>
