
<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";
session_start();
        if(isset($_REQUEST['user_name'])){
				//connection
                  include("c_log.php");

				//รับค่า user & password
                  $Username = $_REQUEST['user_name'];
                  $Password = $_REQUEST['password'];
				//query 
                  $sql="SELECT * FROM admin Where user_name='".$Username."' and password='".$Password."' ";

                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["admin_id"] = $row["admin_id"];//ประกาศตัวแปรUserIDไว้เพื่อส่งค่า
                      $_SESSION["user_name"] = $row["user_name"];//ประกาศตัวแปรUserไว้เพื่อส่งค่า
                      $_SESSION["type"] = $row["type"];//ประกาศตัวแปรUserlevelไว้เพื่อส่งค่า

                      if($_SESSION["type"]=="a"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: admin_page.php");

                      }

                      if ($_SESSION["type"]=="m"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: user_page.php");

                      }

                  }else{
                    // echo "<script>";
                    //     echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                    //     echo "window.history.back()";
                    // echo "</script>";

                    echo "<script> 
                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'Something went wrong!',
                      footer: '<a href='admin/login.php'>Why do I have this issue?</a>'
                    });
                    </script>";

                    


                  }

        }else{


             Header("Location: login.php"); //user & password incorrect back to login again

        }
    
?>