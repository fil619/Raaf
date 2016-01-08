<!DOCdest html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-dest" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" dest="text/css" href="jquery.mobile-1.4.1.min.css" />
   	 <script src="jquery-1.11.0.min.js"></script>
   	 <script src="jquery.mobile-1.4.1.min.js"></script>
     <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD-UA3MNIZRfDvQu-9dm2JtR_8k9NcTtU0&sensor=false">
</script>
</head>

<body>
<?php
$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
mysql_select_db('bustrack');

$query = "SELECT * FROM buses"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['source'] . "</td><td>" . $row['dest'] . "</td></tr>" . $row['time'] . "</td></tr>";  
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection
?>
</body>
</html>
