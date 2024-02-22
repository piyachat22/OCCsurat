<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  </head>
  <body>
    <nav class="sidebar">
      <!-- <a href="#" class="logo">CodingLab</a> -->
        <center><img src = "img/logo.png" class="logo" alt="Image" style="width:60%;" style="margin-left: 100px;" ></center>
      <div class="menu-content">
        <ul class="menu-items">
          <center><div class="menu-title">Admin</div></center>

          <li class="item">
            <a href="#"><i class="fa-solid fa-chart-column" style="font-size: 20px;"></i> Dashboard</a>
          </li>
          <li class="item">
            <a href="#"><i class="fa-solid fa-map-location-dot" style="font-size: 20px;"></i> แผนที่ทุนทางวัฒนธรรม</a>
          </li>

          <li class="item">
            <div class="submenu-item">
              <span><i class="fa-solid fa-user-group" style="font-size: 20px;"></i> ข้อมูลประชากร</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>
            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                พื้นที่
              </div>
              <li class="item">
                <a href="#">xxxxx</a>
              </li>
              <li class="item">
                <a href="#">xxxxx</a>
              </li>
              <li class="item">
                <a href="#">xxxxx</a>
              </li>
            </ul>
          </li>

          <li class="item">
            <div class="submenu-item">
              <span><i class="fa-regular fa-newspaper" style="font-size: 20px;"></i> รายงาน</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>
            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                รายงานสรุปผล
              </div>
              <li class="item">
                <a href="#"> รายงาน xxxxx</a>
              </li>
              <li class="item">
                <a href="#"> รายงาน xxxxx</a>
              </li>
              <li class="item">
                <a href="#"> รายงาน xxxxx</a>
              </li>
            </ul>
          </li>

          <li class="item">
            <a href="#"><i class="fa-solid fa-right-from-bracket" style="font-size: 20px;"></i> logout</a>
          </li>
        </ul>
      </div>
    </nav>
    
    <nav class="navbar">
      <i class="fa-solid fa-bars" id="sidebar-close"></i>
      <center><p style="font-size: 16px; color: #ffd500;" >ข้อมูลทุนทางวัฒนธรรมชาวไทยเชื้อสายจีนและเวียดนาม </p></center>
    </nav>
    
    <main class="main">
      <h1>Admin Dashboard Content</h1>
    </main>
    <main class="main">
      <h1>Admin Dashboard Content</h1>
    </main>

    <script src="script.js"></script>
  </body>
</html>