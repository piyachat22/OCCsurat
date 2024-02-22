<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>login</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> </head>
 <style>
  body{
			background-image: url("img/background.jpg");
			background-size: 100%;
		}
 </style>
</head>
<body>
<nav class="navbar navbar-expand-lg " style="background-color: #990000;">
  <div class="container-fluid">
    <div>
      <img src = "img/logo.png" alt="Image" style="width:80px;" style="margin-left: 100px;" style="border-radius: 100%">
    </div>
    <p class = "text-warning font-weight-bold" style="font-size: 18px;">ข้อมูลทุนทางวัฒนธรรมชาวไทยเชื้อสายจีนและเวียดนาม </p><br> 
    <p class = "text-white" style="font-size: 16px;" >เทศบาลนครสุราษฎร์ธานี</p>
    <input type="button" value="ยกเลิก" onclick="window.location.href='index.php';" style="font-size: 18px;" class="btn btn-outline-light">
  </div>
</nav>

 <div class="container-fluid py-5 h-100" >
  <div class="row d-flex justify-content-center align-items-center h-100">
   <div class="col-12 col-md-8 col-lg-6 col-xl-5">
    <div class="card text-white" style="background-color: #990000;">
     <div class="card-body p-5 text-center" >
      <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
      <p class="text-white-50 mb-5">Please enter your login and password!</p>

      <form class="form" name="frmlogin"  method="post" action="a_login.php" >
       <div class="form-outline mb-4">
        <input type="text" id="user_name" name="user_name" placeholder="User Name" class="form-control form-control-lg"> </div>
       <div class="form-outline mb-4">
        <input type="password" id="password" name="password" placeholder="Password" class="form-control form-control-lg"> </div>
       <div class="form-outline mb-4 d-grid gap-2">
        <button type="submit" class="btn btn-outline-light">Login </button>

       </div>
       <hr class="my-4"> 
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>