<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$retype_email = $_POST['retype_email'];
	$password = $_POST['password'];
	$retype_password = $_POST['retype_password'];

	// Database connection
	$conn = new mysqli('localhost:3307','root','root','lapcare');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into signup(name, email, retype_email, password, retype_password) values (?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $name, $email, $retype_email, $password, $retype_password);
		$execval = $stmt->execute();
		echo $execval;
		echo " Registration successfully ";
		header('Location: login.html');
		exit();
		$stmt->close();
		$conn->close();
	}
?>
