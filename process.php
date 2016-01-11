<!DOCTYPE html>
<html>

<body>


<?php

$source= $_POST['source'];
$dest= $_POST['dest'];
$date= $_POST['date'];
$time= $_POST['time'];

// Create connection
$con=mysqli_connect("localhost","bus-tracker","bustracker","bus-tracker");

// Check connection
if(mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$query="SELECT * FROM findmybus"; $result=mysql_query($query);
$num=mysql_numrows($result); mysqli_close($con);
echo "<b>
<center>Database Output</center>
</b>
<br>
<br>";
$i=0;
while ($i < $num) {$source_db=mysql_result($result,$i,"source");
$dest_db-name=mysql_result($result,$i,"dest");
$time_db=mysql_result($result,$i,"time");
$date_db=mysql_result($result,$i,"date");

echo "<table> <tr> <td>source</td> <td>Destination</td> <td>time </td> <td> date </td> </tr>";
if($source==$source_db&&$dest==$dest_db) {

echo "<tr> <td>$source_db <td> $dest_db <td> $time_db <td> $date_db </tr>"; 

}
$i++;
}
?>

</body>
</html>
