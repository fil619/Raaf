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
	 <center>
	
	<span style="font-size: 28px;font-weight: bold;"><?php
	if($_POST['source']==1 || $_POST['dest']==1)
	{
	}
	else{
	echo $_POST['source']." to ".$_POST['dest'];
	}?></span>
	 <?php 
	 
	 
	 $result=mysql_query("select * from buses where source='".$_POST['source']."' and destination='".$_POST['dest']."'");
	 
	 $rowcount = mysql_num_rows($result);
	
	if($rowcount==0)
	{?>
	<span style="font-size: 28px;font-weight: bold;">No Records Found</span>
	
	<?php
	}
	else
	{
	 ?>
	  <table style="box-shadow: 2px 2px 2px 2px;" border=1>
	 <tr>
		<td style="text-align: center;"><b>Bus Number</b></td>
		 <td style="text-align: center;"><b>Company</b></td>
		 <td style="text-align: center;"><b>Bus Time</b></td>
	 </tr>

                         <?php while($rows=mysql_fetch_assoc($result)): ?>

                        

                       <tr>
					   <td style="text-align: center;"> <?php echo $rows["busnumber"]; ?></td>
					    <td style="text-align: center;"> <?php echo $rows["company"];?></td>
                        <td style="text-align: center;"><?php echo $rows["time"];?></td>
						</tr>
                        
                          <?php endwhile; 
						}
						  ?> 
</table>
</center>
</div>
 <div data-role="footer" data-position="fixed" data-theme="b"><h6 align="center">Designed by The Group</h6></div>
</section>
  </body>
   </html>
