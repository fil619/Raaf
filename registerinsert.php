<?php

require_once("dbconnect.php");
	
  $username=$_POST["username"];
  $pass=md5($_POST["pass"]);
  $dob=$_POST["date"];
 
  
$insert_query="INSERT INTO user VALUE('$username','$pass','$dob')";

$result=mysql_query($insert_query);
 header("Location: index.php"); 

?>