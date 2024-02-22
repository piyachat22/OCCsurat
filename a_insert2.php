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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

<style type="text/css">
		#map_canvas {
			width: 80%;
			height: 100%;
			border: 1px solid blue;
            margin: 0px auto;

		}
	</style>
</head>
<script language="JavaScript">
function initMap() { 
	var myOptions = {
	  zoom: 13,
	  center: new google.maps.LatLng(9.134001055884092, 99.33318685619217),
	};

	var map = new google.maps.Map(document.getElementById('map_canvas'),
		myOptions);


	var marker = new  google.maps.Marker({
		map:map,
		position: new google.maps.LatLng(9.134001055884092, 99.33318685619217),
		draggalbe:true

	});

	var infowindow = new google.maps.InfoWindow({
		map:map,
		content:"เพิ่มข้อมูล",
		position: new google.maps.LatLng(9.134001055884092, 99.33318685619217)

	});

	google.maps.event.addListener(map,'click',function(event){
		infowindow.open(map,marker);
		infowindow.setContent("LatLng = " + event.latLng);
		infowindow.setPosition(event.latLng);
		marker.setPosition(event.latLng);

		$("#lat").val(event.latLng.lat());
		$("#lng").val(event.latLng.lng());

		
	});	

}

function saveLocation(){

var location_name  = $("#location_name").val();
var lat  = $("#lat").val();
var lng  = $("#lng").val();
var location_type  = $("#location_type option:selected").val();
var location_detail = $("textarea#location_detail").val();


var imgname = $('input[type=file]').val();
var size = $('#image_file')[0].files[0].size;
var ext = imgname.substr((imgname.lastIndexOf('.')+1));
	ext = ext.toLowerCase();
if(ext == 'jpg'){
	if(size <= 1000000){
			
		$.ajax({
			method:"POST",
			url:"a_insert2.php",
			data: new FormData($('form')[0]),
			enctype: 'multipart/form-data',
			cache:false,
			contentType:false,
			processData:false
		}).done(function(){
			alert("OK");
			
		});
		
	}else{
		alert('ขนาดไฟล์ใหญ่เกินกว่าที่กำหนด');
	}
}else{
	alert('ไฟล์ที่เลือกต้องเป็นชนิดรูปภาพเท่านั้น');
}
}
</script>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #990000;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="404.php">
                <div class="sidebar-brand-icon ">
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
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="education.php">
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

				<!-- Page Heading -->
				<h1 class="h3 mb-4 text-gray-800">เพิ่มข้อมูล</h1>
	<div class="row">
		<div class="col-6">
		<div id="map_canvas"></div>
		</div>

		<div class="col-6">
		<div style="margin-top:70px">
		
				<form action="a_save2.php" name="frmAdd" method="post">
						<div class="form-group">
						  <label for="name">ชื่อ-สกุล</label>
						  <input type="text" class="form-control" id="name" name="name" placeholder="location name">
						</div>
						<div class="form-group">
						  <label for="address">ที่อยู่</label>
						  <input type="text" class="form-control" id="address" name="address" placeholder="location">
						</div>
						<div class="form-group">
								<label for="lat">Lat</label>
								<input type="text" class="form-control" id="lat" name="lat" placeholder="Lat">
						</div>

						<div class="form-group">
							<label for="Lng">Lng</label>
							<input type="text" class="form-control" id="lng" name="lng" placeholder="Lng">
						</div>
						<div class="form-group">
							<label for="type">รายละเอียดทุนทางวัฒนธรรมที่เกี่ยวข้อง</label>
							<textarea id="type" name="type" class="form-control" placeholder="รายละเอียด"></textarea>
						</div>



						<div class="form-group">
							<label for="image_file">Image File</label>
							<input type="file" id="image_file" name="image_file">
						
						</div>
						<button type="button" value="ย้อนกลับ" class="btn btn-outline-light" onclick="window.location.href='index.php';" style="font-size: 18px; margin: 15px 0px 15px 0px; background-color:mediumorchid;" >ย้อนกลับ</button>
						<button type="submit" name="submit" class="btn btn-primary btn-outline-light">Save</button>

					</form>
	

		</div>
		</div>

		</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
	</body>
	</html>