<?php
if (isset($_POST['submit'])) {
	header('Location: recruiter_profile.html');
}
$name2 = $_POST['name2'];
// $lastName = $_POST['lastName'];
// $gender = $_POST['gender'];
$email = $_POST['email'];
$password2 = $_POST['password2'];
$confirmpassword = $_POST['confirmpassword'];
// $number = $_POST['number'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into recruiter_registration(name2, email, password2,confirmpassword) values(?,?,?,?)");
	$stmt->bind_param("ssss", $name2, $email, $password2, $confirmpassword);
	$execval = $stmt->execute();
	echo $execval;
	// echo "Registration successfully...";
	$stmt->close();
	$conn->close();
}
?>