<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">



<style>
    table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		font-size: 14px;
		}

		td, th {
			border: 1px solid black;
			text-align: left;
			border-collapse: collapse;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}
		#popup {
		position: fixed;
		height: 200px;
		width: 500px;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: white;
		padding: 20px;
		border: 1px solid black;
		}
		#popupmore {
		position: fixed;
		height: 500px;
		width: 700px;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: white;
		padding: 20px;
		border: 1px solid black;
		}

    </style>
	<script>
        // Open popup function
	function openPopup() {
	document.getElementById("popup").style.display = "block";
	}

	// Close popup function
	function closePopup() {
	document.getElementById("popup").style.display = "none";
	}

	function openPopupmore() {
	document.getElementById("popupmore").style.display = "block";
	}
	function closePopupmore() {
	document.getElementById("popupmore").style.display = "none";
	}
    </script>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #990000;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="404.php">
                <div class="sidebar-brand-icon">
                <div style="margin-top: 20px;">
                <img src = "img/logo.png" alt="Image" style="width:70px;" style="margin-left: 100px;" style="border-radius: 100%">
                </div>
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
                                <a class="dropdown-item" href="navbar.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" href="navbar.php"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


<?php
		$conn = new mysqli('localhost', 'root', '', 'education');
		// require 'db/DbConnect.php';
		$sql = "SELECT * FROM population ";
		$result = $conn->query($sql);
		?>
	<div style="margin: 20px 50px 20px 30px;">
		<h2>ข้อมูลประชากร</h2>
		<div align="right">
            <!-- <input type="button" value="เพิ่มข้อมูล" class="btn-outline-light" onclick="window.location.href='a_insert_P.php';" style="font-size: 18px; margin-bottom: 15px; background-color:#4682B4;" > -->
			<button class="btn-outline-light font-size: 12px;" style="font-size: 18px; margin-bottom: 15px; background-color:#4682B4;" onclick="openPopup()">เพิ่มข้อมูล</button>

			<input type="button" value="พิมพ์" class="btn-outline-light" onclick="window.location.href='#';" style="font-size: 18px; margin-bottom: 15px; background-color:#2E8B57;" >
		</div>
		<table>
			<thead>
				<tr>
					<th >#</th>
					<th >ชื่อ-สกุล</th>
					<th >เบอร์โทรศัพท์</th>
					<th >อายุ</th>
					<th >อาชีพ</th>
					<th >เพิ่มเติม</th>
					<th ></th>
					<th ></th>
				</tr>
			</thead>
			<tbody style="font-size: 14px;">
				<?php while($row = $result->fetch_assoc()): ?>
					<tr>
						<td><?php echo $row['P_id']; ?></td>
						<td class="name"><?php echo $row['P_name']; ?></td>
						<td><?php echo $row['P_phone']; ?></td>
						<td><?php echo $row['P_age']; ?></td>
						<td><?php echo $row['P_occ']; ?></td>
						<td>
						<button class="btn-outline-light font-size: 12px;" style="font-size: 18px; margin-bottom: 15px; background-color:#4682B4;" onclick="openPopupmore()">เพิ่มเติม</button>
						</td>
						<div id="popupmore" style="display:none">
							<div align="left">
								<div class="col-6">
								<label for="P_name">ชื่อ-สกุล</label>
								<input type="text"></br>
								<label for="P_phone">เบอร์โทรศัพท์</label>
								<input type="text"></br>
								<label for="P_age">อายุ</label>
								<input type="text"></br>
								<label for="P_age">ศาสนา</label>
								<input type="text"></br>
								<label for="P_occ">อาชีพ</label>
								<input type="text"></br>
								<label for="P_ethnicity">เชื้อชาติ</label>
								<input type="text"></br>
								<label for="P_nationality">สัญชาติ</label>
								<input type="text"></br>
								
								<label for="P_debt">สถานะหนี้สิน</label>
								<input type="text"></br>
								<label for="P_sav">สถานะการออม</label>
								<input type="text"></br>
								<label for="P_con">โรคประจำตัว</label>
								<input type="text"></br>
								<label for="P_income_m">จำนวนรายได้/เดือน</label>
								<input type="text"></br>
								<label for="P_expenses_m">จำนวนรายจ่าย/เดือน</label>
								<input type="text"></br>
								<label for="P_income_y">จำนวนรายได้/ปี</label>
								<input type="text"></br>
								<label for="P_source">ที่มาของรายได้</label>
								<input type="text"></br>
								
							</div>
						<button class="btn-outline-light font-size: 12px;" style="background-color:#B22222; margin-top: 30px; float: right" onclick="closePopupmore()">ยกเลิก</button>

						</div>

						<td><input type="button" class="btn-outline-light font-size: 12px;" style="background-color:#DAA520;" value="แก้ไข" onclick="javascript:window.location='a_edit_P.php?id=<?php echo $row['P_id'] ;?>';"></td>
						<td><input type="button" class="btn-outline-light font-size: 12px;" style="background-color:#B22222;" value="ลบ" onclick="javascript:window.location='a_delete_P.php?id=<?php echo $row['P_id'] ;?>';"></td>
					</tr>
					<?php endwhile ?>
					
			</tbody>
		</table>
		<div align="right">
			<input type="button" value="ย้อนกลับ" class="btn-outline-light" onclick="window.location.href='charts.php';" style="font-size: 18px; margin-top: 15px; background-color:mediumorchid;" >
		</div>

</head>
<body>

<div id="popup" style="display:none">
  	<div align="center">
	<button class="btn-outline-light " style="font-size: 18px; background-color:#4682B4; margin-top: 50px; height: 50px; width: 200px;" >import file</button>
	<button class="btn-outline-light " style="font-size: 18px; background-color:#4682B4; margin-top: 50px; height: 50px; width: 200px;" onclick="window.location.href='a_insert_P.php';">เพิ่มข้อมูลด้วยตนเอง</button></br>
	</div>
  <button class="btn-outline-light font-size: 12px;" style="background-color:#B22222; margin-top: 30px; float: right" onclick="closePopup()">ยกเลิก</button>

</div>
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

	</div>

	
