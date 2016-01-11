<?php

require_once("dbconnect.php");
	
  $cname=$_POST["cname"];
  $caddress=$_POST["caddress"];
  $cnumber=$_POST["cnumber"];
  $cowner=$_POST["cowner"];
  $cemail=$_POST["cemail"];
  $info=$_POST["infos"];
  
$insert_query="INSERT INTO buscompany VALUE('$cname','$caddress','$cnumber','$cowner','$cemail','$info')";
echo"<script type='text/javascript'>alert('The Details hav been stored')</script>";

$result=mysql_query($insert_query);
 header("Location: admin.php"); 
?>