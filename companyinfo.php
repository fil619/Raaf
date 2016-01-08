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
    
   </head>
   <body>
   	<section id="page0" data-role="page">
     <div data-role="header" data-theme="b"><a href="index1.php" data-icon="home">Home</a><h1 align="center">bUS-TRAkr</h1><a href="logout.php">Logout</a></div>
     <div data-role="content">
<div data-role="collapsible-set">


 <?php 
	 
	 
	 $result=mysql_query("select * from buscompany");
	 
	
	
	 ?>
  <?php while($rows=mysql_fetch_assoc($result)): ?>

	<div data-role="collapsible" data-theme="i" data-iconpos="right" data-expanded-icon="arrow-u" data-collapsed-icon="arrow-d">
	<h2><?php echo $rows["cname"];?></h2>
	<ul data-role="listview" data-inset="true">
	<table>
		<tr>
		<td><b>Company Address : </b></td>
		<td><?php echo $rows["caddress"];?></td>
		</tr>
		<tr>
		<td><b>Company Number : </b></td>
		<td><?php echo $rows["cnumber"];?></td>
		</tr>
		<tr>
		<td><b>Company Owner : </b></td>
		<td><?php echo $rows["cowner"];?></td>
		</tr>
		<tr>
		<td><b>Company Email ID : </b></td>
		<td><?php echo $rows["cemail"];?></td>
		</tr>
		<tr>
		<td><b>Company Information : </b></td>
		<td><?php echo $rows["cinfo"];?></td>
		</tr>
	</table>
	
	</ul>
	</div>
	 <?php endwhile; 
						
						  ?> 
</div>
</div>
 <div data-role="footer" data-position="fixed" data-theme="b"><h6 align="center">Designed by The Group</h6></div>
</section>
  </body>
   </html>
