<?php
if (isset($_POST['submit'])) {
	header('Location: applicant_profile.html');
}
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];


// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into applicant_register(name, email, password,confirmpassword) values(?,?,?,?)");
	$stmt->bind_param("ssss", $name, $email, $password, $confirmpassword);
	$execval = $stmt->execute();
	echo $execval;
	// echo "Registration successfully...";
	$stmt->close();
	$conn->close();
}
?>