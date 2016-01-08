<HTML>
<HEAD>
<TITLE> LOG INFORMATION FOR ALL customers </TITLE>
</HEAD>
<BODY>
<H1> LOG INFORMATION FOR ENTIRE DATABASE </H1>

<?php
$user = 'root';
$password = '';
$database="findmybus";

mysql_connect(localhost,$user, $password);
@mysql_select_db($database) or die( "Unable to select database");
echo $query = "SELECT * FROM customer";
$result = mysql_query($query);

mysql_close();
?>

<table border="2" cellspacing="7" cellpadding="7">
<tr>
<th><font face="Arial, Helvetica, sans-serif">Index</font></th>
<th><font face="Arial, Helvetica, sans-serif">Customer Name</font></th>
<th><font face="Arial, Helvetica, sans-serif">Sex</font></th>
</tr>

<?php

while ($row = mysql_fetch_assoc($result)) {

?>

<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row[id]; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row[customer_name]; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row[sex]; ?></font></td>
</tr>


<?php
}
?> 