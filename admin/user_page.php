<?php session_start();?>
<?php 

if (!$_SESSION["admin_id"]){

	  Header("Location: login.php");

}else{?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>User page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <h1>You are Member</h1>
    <p><strong>hi </strong>: 
    <?php echo ($_SESSION['user_name']);?> <!--show detail login-->
      <?php //session_destroy();?>
    </p>
    <p><strong>
    <a href="c_login.php">Log out</a></strong></p>

</body>
</html>
<?php }?>