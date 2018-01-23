<?php 	

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "weassure";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}
// die();
$name = $_POST['name'];
$position = $_POST['position'];

$sql = "INSERT INTO employee_tbl(name,position) VALUES ('$name','$position');" ;
mysqli_query($connect,$sql);
	mysqli_close($connect);

	header('Location: adminemp.php');

?>