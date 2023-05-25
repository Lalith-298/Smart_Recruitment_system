<?php
if (isset($_POST['submit'])) {
	header('Location: recruiter_profile.html');
}
	$name1 = $_POST['name1'];
	// $lastName = $_POST['lastName'];
	// $gender = $_POST['gender'];
	// $email = $_POST['email'];
	$password1 = $_POST['password1'];
	// $number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into recruiter_login(name1,  password1) values(?, ?)");
		$stmt->bind_param("ss",  $name1,  $password1);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>