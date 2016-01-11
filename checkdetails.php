  <?php
  session_start();

	require_once("dbconnect.php");

	$userid=$_POST['userid'];
	
	$dob=$_POST['date'];
  $login = mysql_query("select * from user where emailid = '".$userid."' and dob = '" .$dob."'");

$rowcount = mysql_num_rows($login);
if ($rowcount == 1)
{

$_SESSION['emailid']=$userid;

$_SESSION['msgs']= "";
header("Location: resetpassword.php"); 
}
else
{
 $_SESSION['msgs']= "Invalid UserID/Date Of Birth";
header("Location: settings.php");

}
?>