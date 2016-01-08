<?php
require_once("dbconnect.php");

session_start();
if($_SESSION['admin']==0)
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
   
   </head>
   <body>
   	<section id="page0" data-role="page">
     <div data-role="header" data-theme="b"><a href="admin.php" data-icon="home">Home</a><h1 align="center">bUS-TRAkr</h1><a href="logout.php">Logout</a></div>
     <div data-role="content">
	 <form action="insertbuses.php" method="post" enctype="text/html">
<div >Source : <input type="text" name="source" value=""/></div>
<div >Destination : <input type="text" name="destination" value=""/></div>
<div >Bus Number : <input type="text" name="busnumber" value=""/></div>
<div >Time : <input type="time" name="time" value=""/></div>
<div >Company : <input type="text" name="company" value=""/></div>
<div > <input type="submit" name="Submit" value="Submit"/></div>
</form>
</div>
 <div data-role="footer" data-position="fixed" data-theme="b"><h6 align="center">Designed by The Group</h6></div>
</section>
  </body>
   </html>
