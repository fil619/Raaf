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
     <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD-UA3MNIZRfDvQu-9dm2JtR_8k9NcTtU0&sensor=false">
</script>


   </head>
   <body>
   	
<!-- Find My Bus Starts -->


<section id="page1" data-role="page">
<header data-role="header" data-theme="b"><a href="index1.php" data-icon="home">Home</a><h1>Find My Bus</h1><a href="logout.php">Logout</a></header>
<div data-role="content">
  <form method="post" action="displaybus.php" enctype="text/html">
    <div data-role="fieldcontain">
      <fieldset data-role="controlgroup">
        <legend>Leaving From</legend>
        <!-- <label>Enter Address,Stop,Landmarks:</label>
         <input type="text" name="string-source"></input> -->
        <label for="source">Select a Location :</label>
        <select id="source" name="source">
          <option value="1">Select your location</option>
		  <option value="arambol">Arambol</option>
          <option value="bicholim">Bicholim</option>
		  <option value="calangute">Calangute</option>
		  <option value="canacona">Canacona</option>
		  <option value="colva">Colva</option>
		  <option value="mapusa">Mapusa</option>
		  <option value="margao">Margao</option>
          <option value="panjim">Panjim</option>
		  <option value="pernem">Pernem</option>
		  <option value="ponda">Ponda</option>
		  <option value="sanquelim">Sanquelim</option>
		  <option value="shiroda">Shiroda</option>
		  <option value="vasco">Vasco</option>
		  <option value="verna">Verna Ind. Est.</option>
        </select>
        
      </fieldset>
    </div>
    <div data-role="fieldcontain">
      <fieldset data-role="controlgroup">
        <legend>Going To</legend>
        <label for="dest">Select a Location :</label>
        <select id="dest" name="dest">
          <option value="1">Select your destination</option>
          <option value="arambol">Arambol</option>
          <option value="bicholim">Bicholim</option>
		  <option value="calangute">Calangute</option>
		  <option value="canacona">Canacona</option>
		  <option value="colva">Colva</option>
		  <option value="mapusa">Mapusa</option>
		  <option value="margao">Margao</option>
          <option value="panjim">Panjim</option>
		  <option value="pernem">Pernem</option>
		  <option value="ponda">Ponda</option>
		  <option value="sanquelim">Sanquelim</option>
		  <option value="shiroda">Shiroda</option>
		  <option value="vasco">Vasco</option>
		  <option value="verna">Verna Ind. Est.</option>
</select> 
        

<br>
<br>



      </fieldset>
      </div>

      <div data-role="fieldcontain" data-type="horizontal">
      <fieldset>
        <input type="submit"  value="Submit" name="submit">
        
	<br><button type="reset" value="Reset">Reset</button>

      </fieldset>
    </div>



  </form>

</div>
<footer data-role="footer" data-position="fixed" data-theme="b"><h1>Designed By The Group</h1></footer>
</section>

<!-- Find My Bus Ends -->
   </body>
   </html>
