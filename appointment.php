<?php
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost:3307','root','root','lapcare');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = "insert into appointment (name, mobile, address, date, time, message) values ('$name', '$mobile', '$address', '$date', '$time', '$message');";
		if ($conn->query($stmt)){
		header('Location: appointment.html?email sent successfully ');
		}else{
		echo "Error: ". $conn->error;
}
}
		
	
?>
