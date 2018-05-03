<?php

include "db_connect.php";

$code = $_POST['code'];

$query1 ="SELECT * FROM `digital_addresses` WHERE `code` = '$code'";
$result1 =mysqli_query($connection,$query1);
if(!($row=mysqli_fetch_assoc($result1)))
{
   header('location: index.html?msg1=1');
}

?>
<html>
<head><link href="main3.css" rel="stylesheet">
<link href="../css/bootstrap.css" rel="stylesheet">
</head>

<body>


		<div id="container">
		  <div id="map"></div>
		  <div id="infoi">
			
				<div class="col col-2">
					<div class="box"><div class="content1"><h1 class="lead display-4"> <span style="font-weight:bold"></span> <?php echo $code; ?> </h1></div>
						<!--<div class="content2"> Sansad Marg, Janpath, Connaught Place, New Delhi, Delhi </div>-->
						<div class="content2"> <?php $code = $_POST['code'];

$query1 ="SELECT * FROM `digital_addresses` WHERE `code` = '$code'";
$result1 =mysqli_query($connection,$query1);
if($row=mysqli_fetch_assoc($result1))
{
   echo $row['best_street_address'];
}?> </div>
						
						<a href="../index.html" class="btn btn-secondary" style="margin-top:30px;">HOME</a>
					</div>

			
		  </div>
		</div>


		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script>
		function myMap() {
  var mapCanvas = document.getElementById("map");
  var lat = "<?php $code = $_POST['code'];

$query1 ="SELECT * FROM `digital_addresses` WHERE `code` = '$code'";
$result1 =mysqli_query($connection,$query1);
if($row=mysqli_fetch_assoc($result1))
{
   echo $row['latitude'];
}?>";
var lng = "<?php $code = $_POST['code'];

$query1 ="SELECT * FROM `digital_addresses` WHERE `code` = '$code'";
$result1 =mysqli_query($connection,$query1);
if($row=mysqli_fetch_assoc($result1))
{
   echo $row['longitude'];
}?>";
  var myCenter = new google.maps.LatLng(lat,lng); 
  var mapOptions = {center: myCenter, zoom: 18};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}
		</script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqjLTpZim6AizPKtJd0RyzOWB6NdISXpg&callback=myMap"></script>

</body>
</html>