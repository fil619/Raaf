<?php 
require_once("dbconnect.php");
ob_start();
session_start();
 $_SESSION['userid'] = 0;
  if(!isset($_SESSION['msg']))
    {
      $_SESSION['msg']="";  
    }
    
    //unset($_SESSION['userid']);
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
     <div data-role="header" data-theme="b"><h1 align="center">BUS TRACKER</h1></div>
     <div data-role="content">
<form method="post" action="loginuser.php" enctype="text/html">
	 <div style="margin-top:6%;">
	 <center>
<table>
<tr><td>Email ID: </td><td><input type="text" name="username" value=""/></td></tr>

<tr><td>Password: </td><td><input type="password" name="pass" value=""/></td></tr>
<tr><td></td><td><input type="submit" name="Login" value="Login"/></td></tr>
<tr><td></td><td style="text-align:center;"><a href="register.php" style="text-decoration:none;">Register Here</a></td></tr>

</table>
<table id="error">
                  <tr>
                  <td style="color:red"><?php echo " ".$_SESSION['msg']; ?></td>
                  </tr>
                  </table>
</div>

	</center>
	
</div>
</form>
</div>
 <div data-role="footer" data-position="fixed" data-theme="b"><h6 align="center">Designed by The Group</h6></div>
</section>
  </body>
   </html>
