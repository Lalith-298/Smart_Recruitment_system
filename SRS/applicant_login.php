<?php
if (isset($_POST['submit'])) {
	header('Location: applicant_profile.html');
}
	$email = $_POST['email'];
	
	$password = $_POST['password'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into applicant_login(email,  password) values(?, ?)");
		$stmt->bind_param("ss",  $email,  $password);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>