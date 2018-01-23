<?php

if(isset($_POST['addnews'])){
	// $pic = $_POST['newspic'];
	$localhost = "localhost";
	$username = "root";
	$password = "";
	$dbname = "weassure";

	// db connection
	$conn = new mysqli($localhost, $username, $password, $dbname);
	// check connection
	if($conn->connect_error) {
	  die("Connection Failed : " . $conn->connect_error);
	} else {
	  // echo "Successfully connected";
	}
	// echo basename($_FILES["newspic"]["name"]);
	// die();
	$target_dir = "uploadpic/";
	$target_file = $target_dir . date("mdYHis") .'.'.pathinfo(basename($_FILES["newspic"]["name"]),PATHINFO_EXTENSION);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$temp_name  = $_FILES['newspic']['tmp_name']; 
	move_uploaded_file($temp_name, $target_file);
	
	$sql = "INSERT INTO news(news_pic) VALUES ('$target_file');" ;
	mysqli_query($conn,$sql);
	mysqli_close($conn);
	header('Location: adminpic1.php');
}
if(isset($_POST['addprod'])){
	// $pic = $_POST['newspic'];
	$localhost = "localhost";
	$username = "root";
	$password = "";
	$dbname = "weassure";

	// db connection
	$conn = new mysqli($localhost, $username, $password, $dbname);
	// check connection
	if($conn->connect_error) {
	  die("Connection Failed : " . $conn->connect_error);
	} else {
	  // echo "Successfully connected";
	}

	// die();
	$target_dir = "uploadpic/";
	$target_file = $target_dir . date("mdYHis") .'.'.pathinfo(basename($_FILES["prodpic"]["name"]),PATHINFO_EXTENSION);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$temp_name  = $_FILES['prodpic']['tmp_name']; 
	move_uploaded_file($temp_name, $target_file);
	
	$sql = "INSERT INTO products(prod_pic) VALUES ('$target_file');" ;
	mysqli_query($conn,$sql);
	mysqli_close($conn);
	header('Location: adminpic1.php');
}
if(isset($_POST['addemp'])){
	// $pic = $_POST['newspic'];
	$localhost = "localhost";
	$username = "root";
	$password = "";
	$dbname = "weassure";

	// db connection
	$conn = new mysqli($localhost, $username, $password, $dbname);
	// check connection
	if($conn->connect_error) {
	  die("Connection Failed : " . $conn->connect_error);
	} else {
	  // echo "Successfully connected";
	}
	// echo basename($_FILES["newspic"]["name"]);
	// die();
	$target_dir = "uploadpic/";
	$target_file = $target_dir . date("mdYHis") .'.'.pathinfo(basename($_FILES["emppic"]["name"]),PATHINFO_EXTENSION);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$temp_name  = $_FILES['emppic']['tmp_name']; 
	move_uploaded_file($temp_name, $target_file);
	
	$sql = "INSERT INTO employee(emp_pic) VALUES ('$target_file');" ;
	mysqli_query($conn,$sql);
	mysqli_close($conn);
	header('Location: adminpic1.php');
}


?>