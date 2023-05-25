<?php
if (isset($_POST['submit'])) {
	header('Location: view_jobs.php');
}
// $jobnumber = $_POST['Job Number'];
$title = $_POST['title'];
$description = $_POST['description'];
$location = $_POST['location'];
$salary = $_POST['salary'];


// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into postjobs( title, description,location,salary) values(?,?,?,?)");
	$stmt->bind_param("sssi",  $title, $description, $location,$salary);
	$execval = $stmt->execute();
	echo $execval;
	echo "Registration successfully...";
	$stmt->close();
	$conn->close();
}
?>