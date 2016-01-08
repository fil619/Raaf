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

<!-- Show Route Map Starts -->

<section id="page3" data-role="page">
<header data-role="header" data-theme="b"><a href="index1.php" data-icon="home">Home</a><h1>Route Map</h1><a href="logout.php">Logout</a></header>
<div class="content" data-role="content">
  <div data-role="fieldcontain">
    <label for="route" class="select">Select the route :</label>
    <select name="route" id="route">
      <option value="option1">440</option>
      <option value="option2">441</option>
      <option value="option3">442</option>
      <option value="option4">443</option>
    </select>
    
  </div>
<div id="googleMap" style="width:device-width;height:250px;"></div>
</div>
<footer data-role="footer" data-position="fixed" data-theme="b"><h1>Designed By Mayur</h1></footer>
</section>

<!-- Show Route Map Ends -->


   </body>
   </html>
