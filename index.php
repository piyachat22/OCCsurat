<!DOCTYPE html>
<html>
<head>
	<!-- <title>Access Google Maps API in PHP</title> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/googlemap.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="css/sb-admin-2.min.css" rel="stylesheet">
	<style type="text/css">

		.wrapper{
			margin-left: 25px;
			margin-right: 25px;
			min-width: 650px;
			background-color: white;
		}
		/* .container {
			height: 1150px;
		} */
		#map {
			width: 900px;
			height: 500px;
			border: 1px solid blue;
            margin: 0px auto;
		}
		#data, #allData {
			display: none;
		}
		
	</style>
</head>
<body>

	<!-- <div class="wrapper">
	<div class="container" > -->
	<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">แผนที่ประชากร</h1>
	<!-- <div align="right">
        <button type="button" value="แสดงข้อมูล" class="btn btn-outline-light" onclick="window.location.href='show_data.php';" style="font-size: 18px; margin: 15px 0px 0px 0px; background-color:mediumorchid;" >แสดงข้อมูล</button></br>
		<button type="button" value="ประชากร" class="btn btn-outline-light" onclick="window.location.href='show_dataP.php';" style="font-size: 18px; margin: 5px 0px 0px 0px; background-color:mediumorchid;" >ประชากร</button></br>
		<button type="button" value="เพิ่มข้อมูล" class="btn btn-outline-light" onclick="window.location.href='a_insert2.php';" style="font-size: 18px; margin: 5px 0px 15px 0px; background-color:mediumorchid;" >เพิ่มข้อมูล</button>
	</div> -->
		<?php 
			require 'education.php';
			$edu = new education;
			$coll = $edu->getCollegesBlankLatLng();
			$coll = json_encode($coll, true);
			echo '<div id="data">' . $coll . '</div>';

			$allData = $edu->getAllColleges();
			$allData = json_encode($allData, true);
			echo '<div id="allData">' . $allData . '</div>';			
		 ?>
		<div id="map"></div>
		<p class="text-danger" style="margin-left: 100px;">หมายเหตุ ตำแหน่งพิกัดผู้ให้ข้อมูลโดยสมัครใจ</p>
</div>	

</body>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfwo7C7-WLO8GU-bc6WmvqmsF8FKipzuE&callback=loadMap">
</script>

</html>