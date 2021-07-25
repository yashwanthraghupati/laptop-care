<?php
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$skin = $_POST['skin'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$upiid = $_POST['upiid'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost:3307','root','root','lapcare');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into payment (name, mobile,skin, address, email, upiid, message) values (?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("sssssss", $name, $mobile, $skin, $address, $email, $upiid, $message);
		$execval = $stmt->execute();
		echo $execval;
		header('Location: skins.html?email sent successfully ');
		exit();
		$stmt->close();
		$conn->close();
	}
?>
