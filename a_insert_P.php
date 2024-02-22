<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

<title>GIS</title>

  <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css" crossorigin="anonymous">

<script type="text/javascript" src="jquery-3.2.1.min.js" ></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfwo7C7-WLO8GU-bc6WmvqmsF8FKipzuE&callback=initMap"
type="text/javascript"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #990000;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="404.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="404.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="a_map.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>แผนที่ข้อมูล</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>ข้อมูลประชากร</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h5 class="collapse-header">ประเภทประชากร</h5>
                        <a class="collapse-item" href="show_dataP.php">ข้อมูลประชากรกรทั้งหมด</a>
                        <a class="collapse-item" href="#">ชาวจีน</a>
                        <a class="collapse-item" href="#">ชาวเวียดนาม</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>แก้ไขข้อมูล</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h5 class="collapse-header">xxxxxxxxxx</h5>
                        <a class="collapse-item" href="#">ข้อมูลชาวจีน</a>
                        <a class="collapse-item" href="#">ข้อมูลชาวเวียดนาม</a>
                    </div>
                </div>
            </li>
            
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-info" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->


                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/admin.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php" data-toggle="modal" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" href="index.php"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

<div class="container" style="margin: 20px 50px 20px 30px;" >
<h2>ข้อมูลประชากร</h2>

</div>
	<div class="row">
    <div class="col-2"></div>
		<div class="col-8">
		<div style="margin-top:70px">
				<form action="a_save_P.php" method="post">
						<div class="form-group">
						  <label for="P_name">ชื่อ-สกุล</label>
						  <input type="text" class="form-control" id="P_name" name="P_name" placeholder="name">
						</div>
                        <div class="form-group">
						  <label for="P_phone">เบอร์โทรศัพท์</label>
						  <input type="text" class="form-control" id="P_phone" name="P_phone" placeholder="เบอร์โทรศัพท์">
						</div>
                        <div class="form-group">
						  <label for="P_age">อายุ</label>
						  <input type="text" class="form-control" id="P_age" name="P_age" placeholder="อายุ">
						</div>
                        <div class="form-group">
						  <label for="P_rel">ศาสนา</label>
						  <input type="text" class="form-control" id="P_rel" name="P_rel" placeholder="ศาสนา">
						</div>
                        <div class="form-group">
						  <label for="P_occ">อาชีพ</label>
						  <input type="text" class="form-control" id="P_occ" name="P_occ" placeholder="อาชีพ">
						</div>
                        <div class="form-group">
						  <label for="P_ethnicity">เชื้อชาติ</label>
						  <input type="text" class="form-control" id="P_ethnicity" name="P_ethnicity" placeholder="เชื้อชาติ">
						</div>
                        <div class="form-group">
						  <label for="P_nationality">สัญชาติ</label>
						  <input type="text" class="form-control" id="P_nationality" name="P_nationality" placeholder="สัญชาติ">
						</div>
						<div class="form-group">
								<label for="P_debt">สถานะหนี้สิน</label>
						<select class="form-control" id="P_debt" name="P_debt">
								<option value="1">มี</option>
								<option value="2">ไม่มี</option>
							  </select>
							</div>
                            <div class="form-group">
								<label for="P_sav">สถานะการออม</label>
						<select class="form-control" id="P_sav" name="P_sav">
								<option value="1">มี</option>
								<option value="2">ไม่มี</option>
							  </select>
							</div>
                            <div class="form-group">
								<label for="P_con">โรคประจำตัว</label>
						<select class="form-control" id="P_con" name="P_con">
								<option value="1">มี</option>
								<option value="2">ไม่มี</option>
							  </select>
							</div>
						<div class="form-group">
						  <label for="P_income_m">รายได้ต่อเดือน</label>
						  <input type="text" class="form-control" id="P_income_m" name="P_income_m" placeholder="รายได้ต่อเดือน">
						</div>
                        <div class="form-group">
						  <label for="P_expenses_m">รายจ่าย/เดือน</label>
						  <input type="text" class="form-control" id="P_expenses_m" name="P_expenses_m" placeholder="รายจ่าย/เดือน">
						</div>
                        <div class="form-group">
						  <label for="P_income_y">รายได้/ปี</label>
						  <input type="text" class="form-control" id="P_income_y" name="P_income_y" placeholder="รายได้/ปี">
						</div>
                        <div class="form-group">
						  <label for="P_source">ที่มาของรายได้</label>
						  <input type="text" class="form-control" id="P_source" name="P_source" placeholder="ที่มาของรายได้">
						</div>
					


						<button type="button" value="ย้อนกลับ" class="btn btn-outline-light" onclick="window.location.href='show_dataP.php';" style="font-size: 18px; margin: 15px 0px 15px 0px; background-color:mediumorchid;" >ย้อนกลับ</button>
						<button type="submit" name="submit" class="btn btn-primary btn-outline-light">Save</button>

					</form>
	

		</div>
		</div>
    <div class="col-2"></div>
	</div>
	<center>
    <footer class="footer" style="margin-top: 100px ; background-color:mediumorchid;">
        <span>xxxxxxxxxxxxxxxxxxxxxx </span>
    </footer>
    </center>
	<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
	</body>
	</html>