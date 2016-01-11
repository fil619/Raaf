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
    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
   
    </style>
	<link rel="stylesheet" type="text/css" href="jquery.mobile-1.4.1.min.css" />
   	 <script src="jquery-1.11.0.min.js"></script>
   	 <script src="jquery.mobile-1.4.1.min.js"></script>
   
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places"></script>
    <script>
var map;
var infowindow;

function initialize() {



 
  var pyrmont = new google.maps.LatLng(15.250000000000000000,73.916699999999990000);
 $('#map-canvas').css({'width':'820'});
           $('#map-canvas').css({'height':'700'});
	
  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: pyrmont,
    zoom: 10
  });

  var request = {
    location: pyrmont,
    radius: 39050,
    types: ['bus_station']
  };
  infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);
}

function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
      createMarker(results[i]);
    }
  }
}

function createMarker(place) {
  var placeLoc = place.geometry.location;
  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location
  });

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent(place.name);
    infowindow.open(map, this);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
function openmore()
	{
		window.history.back();
	}
	function alertDismissed()
{

}
    </script>
  </head>
  <body>
   
	
<div data-role="page" style="overflow:hidden;">

	  <div data-role="header" data-theme="b"><a href="index1.php" data-icon="home">Home</a><h1 align="center">bUS-TRAkr</h1><a href="logout.php">Logout</a></div>
   			

				<div data-role="content" data-theme="b" style="overflow:hidden;">
  
	 
	  
	  <input type="hidden" value="IN" id="country"/>
	  <br/>
	  <ul data-role="listview" data-inset="true" id="cos" style="overflow:hidden;">
															
															
									</ul>
	  	
		
		<!--<div data-role="collapsible"  data-collapsed-icon="arrow-r" data-iconpos="right" data-expanded-icon="arrow-d" style="display:inline;">
										<h4><span style="color:#000;">Levels</span></h4>
										<ul data-role="listview" data-inset="false" id="hmm">
											
										</ul>
									</div>-->
   <div id="map-canvas"style="top:22px;"></div>

   
	
				</div><!--content ends here-->
				
				 <div data-role="footer" data-position="fixed" data-theme="b"><h6 align="center">Designed by The Group</h6></div>

				
</div><!-- page ends here-->
</body>
</html>