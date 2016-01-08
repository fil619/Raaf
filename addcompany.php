<?php
require_once("dbconnect.php");

session_start();
if($_SESSION['admin']==0)
{
header("Location: login.php");
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
	 <form action="insertcompany.php" method="post" enctype="text/html">
<div >Company Name : <input type="text" name="cname" value=""/></div>
<div >Company Address : <input type="text" name="caddress" value=""/></div>
<div >Company Number : <input type="text" name="cnumber" value=""/></div>
<div >Company Owner : <input type="text" name="cowner" value=""/></div>
<div >Company EmailID : <input type="text" name="cemail" value=""/></div>
<div >Company Information : <textarea rows="50" cols="50" name="infos" value=""></textarea></div>
<div > <input type="submit" name="Submit" value="Submit"/></div>
</form>
</div>
 <div data-role="footer" data-position="fixed" data-theme="b"><h6 align="center">Designed by The Group</h6></div>
</section>
  </body>
   </html>
