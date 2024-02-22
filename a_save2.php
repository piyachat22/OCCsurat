<html>
<head>
<title>save</title>
</head>
<body>
<?php
ini_set('display_errors', 1);
error_reporting(~0);

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "education";

 
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);


$sql = "INSERT INTO colleges (name, address, type, lat, lng)

VALUES ('".$_POST["name"]."','".$_POST["address"]."','".$_POST["type"]."'

,'".$_POST["lat"]."','".$_POST["lng"]."')";

$query = mysqli_query($conn,$sql);

if($query) {
header('Location: show_data.php');
}
mysqli_close($conn);
?>
</body>
</html>