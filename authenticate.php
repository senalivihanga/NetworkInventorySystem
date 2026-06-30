<?php

include("db.php");
session_start();

// Ensure $conn is defined (fallback to local mysqli if db.php didn't set it)
if (!isset($conn) || !($conn instanceof mysqli)) {
	$conn = new mysqli('localhost', 'root', '', '');
	if ($conn->connect_error) {
		die('Database connection failed: ' . $conn->connect_error);
	}
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
WHERE username=?
AND password=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if(mysqli_num_rows($result)==1){

$_SESSION['username']=$username;

header("Location: dashboard.php");

}

else{

echo "<script>

alert('Invalid Username or Password');

window.location='login.php';

</script>";

}

?>