<?php
session_start();

	require_once("dbconnect.php");
	$user=$_POST["username"];

	$pas=md5($_POST["pass"]);
	if($user=="saishmalik@hotmail.com" && $pas=="93719f9c97e2771995cd069f658f5508")
	{
	                   $_SESSION['admin'] = 1;
                       header("Location: admin.php"); 
 }
 else
 {


  $login = mysql_query("select * from user where emailid = '".$user."' and password = '" .$pas."'");

$rowcount = mysql_num_rows($login);
if ($rowcount == 1)
{

$_SESSION['user']=$user;
$_SESSION['userid'] = 1;
$_SESSION['msg']= "";
header("location:index1.php"); 
}
else
{
 $_SESSION['msg']= "Invalid username/Password";
header("Location: index.php");

}
 }
?>