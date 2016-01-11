<?php

require_once("dbconnect.php");
	
  $source=$_POST["source"];
  $destination=$_POST["destination"];
  $busnumber=$_POST["busnumber"];
  $time=$_POST["time"];
  $company=$_POST["company"];
  
$insert_query="INSERT INTO buses VALUE('$source','$destination','$busnumber','$time','$company')";
echo"<script type='text/javascript'>alert('The Details hav been stored')</script>";

$result=mysql_query($insert_query);
 header("Location: admin.php"); 

?>