<?php
$conn= mysqli_connect("localhost","","root","education") or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' "); 
?> 
<?php 
	// class DbConnect {
	// 	private $host = 'localhost';
	// 	private $dbName = 'education';
	// 	private $user = 'root';
	// 	private $pass = '';

	// 	public function connect() {
	// 		try {
	// 			$conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
	// 			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 			return $conn;
	// 		} catch( PDOException $e) {
	// 			echo 'Database Error: ' . $e->getMessage();
	// 		}
	// 	}
	// }
 ?>