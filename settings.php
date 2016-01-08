<?php
require_once("dbconnect.php");

session_start();
if($_SESSION['userid']==0)
{
header("Location: index.php");
}
if(!isset($_SESSION['msgs']))
    {
      $_SESSION['msgs']="";  
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
   

<!-- Settings Starts -->
<section id="page4" data-role="page">
<header data-role="header" data-theme="b"><a href="index1.php" data-icon="home">Home</a><h1>Settings</h1><a href="logout.php">Logout</a></header>
<div class="content" data-role="content">

<form method="post" action="checkdetails.php" enctype="text/html">

	 <div style="margin-top:6%;">
	 <center><center>

<span style="font-size: 24px;">Change Your Password</span>
</center>
<br>
	 <div style="width: 23%;box-shadow: 0px 0px 7px 0px;">

	 <table>


<tr><td>Email ID : </td><td><input type="text" name="userid" value=""/></td></tr>

<tr><td>Date Of Birth : </td><td><input type="date" name="date" value=""/></td></tr>
<tr><td></td><td><input type="submit" name="Submit" value="Submit"/></td></tr>

</table>
<table id="error">
                  <tr>
                  <td style="color:red"><?php echo " ".$_SESSION['msgs']; ?></td>
                  </tr>
                  </table>
</div>

	</center>
	
</div>
</form>

</div>
<footer data-role="footer" data-position="fixed" data-theme="b"><h1>Designed By The Group</h1></footer>
</section>

<!-- Settings Ends -->



   </body>
   </html>
