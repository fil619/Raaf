<?php
require_once("dbconnect.php");
	
  $userid=$_POST["userid"];
  $newpass=md5($_POST["pass1"]);
 
  
$insert_query="update user set password='".$newpass."' where emailid='".$userid."'";
echo"<script type='text/javascript'>alert('The Details hav been stored')</script>";

$result=mysql_query($insert_query);
 header("Location: index1.php"); 
?>