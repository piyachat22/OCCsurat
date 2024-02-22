

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <style>
    body{
			background-image: url("img/background.jpg");
			background-size: 100%;
		}
    .wrapper{
			margin-left: 25px;
			margin-right: 25px;
			min-width: 650px;
			background-color: white;
		}
  </style>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <form class="d-flex justify-content-end" style="background-color: #990000;">
      <input type="button" value="เข้าสู่ระบบ" onclick="window.location.href='login.php';" style="font-size: 1ุpx;" class="btn btn-outline-light">
    </form>

    <nav class="navbar navbar-expand-lg " style="background-color: #990000;">
  
    <!-- <div class="carousel-inner"  >
      <div class="carousel-item active"> -->
        <img src="img/bar1.jpg" class="d-block w-100" alt="..." style="width:100%; height: 300px;">
        <div class="carousel-caption d-none d-md-block" >
          <h2 class="text-dark fw-bold">ข้อมูลทุนทางวัฒนธรรมชาวไทยเชื้อสายจีนและเวียดนาม</h2>
          <p class="text-dark fw-bold" >ในเขตเทศบาลนครสุราษฎร์ธานี</p>
        </div>
        <!-- </div>
      </div> -->
  </nav>

<ul class="nav justify-content-center" style="background-color: #990000; ">
  <li class="nav-item" style="margin-bottom: 10px;">
    <a class="btn btn-outline-light" style="font-size: 12px; margin-right: 30px;"  href="navbar.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-outline-light" style="font-size: 12px; margin-right: 30px;" href="#">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-outline-light" style="font-size: 12px; margin-right: 30px;" href="#">แผนที่ประชากร</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-outline-light" style="font-size: 12px; margin-right: 30px;" href="#">Report</a>
  </li>
</ul>
   
<div class="wrapper">
	<div class="container" >
<?php include("chart2.php") ;include("index.php");include("report.php")?>
  </div>
  </div>
  <?php include("footer.php")?>
  </body>
</html>