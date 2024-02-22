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


$sql = "INSERT INTO population (P_name, P_phone, P_age, P_rel, P_occ, P_ethnicity, P_nationality, P_debt, P_sav, P_con, P_income_m, P_expenses_m, P_income_y, P_source)

VALUES ('".$_POST["P_name"]."','".$_POST["P_phone"]."','".$_POST["P_age"]."','".$_POST["P_rel"]."','".$_POST["P_occ"]."','".$_POST["P_ethnicity"]."'

,'".$_POST["P_nationality"]."','".$_POST["P_debt"]."','".$_POST["P_sav"]."','".$_POST["P_con"]."','".$_POST["P_income_m"]."','".$_POST["P_expenses_m"]."','".$_POST["P_income_y"]."','".$_POST["P_source"]."')";

$query = mysqli_query($conn,$sql);

if($query) {
header('Location: show_dataP.php');
}
mysqli_close($conn);
?>
</body>
</html>