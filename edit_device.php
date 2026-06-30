<?php

include("db.php");

session_start();

if(!isset($_SESSION['username'])){
    header("Location:login.php");
    exit();
}

$id=$_GET['id'];

$sql="SELECT * FROM devices WHERE id=$id";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>

<html>

<head>

<title>Edit Device</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="login-container">

<h2>Edit Device</h2>

<form action="update_device.php" method="POST">

<input type="hidden"
name="id"
value="<?php echo $row['id']; ?>">

<label>Device Name</label>

<input type="text"
name="device_name"
value="<?php echo $row['device_name']; ?>">

<label>Device Type</label>

<input type="text"
name="device_type"
value="<?php echo $row['device_type']; ?>">

<label>Brand</label>

<input type="text"
name="brand"
value="<?php echo $row['brand']; ?>">

<label>Model</label>

<input type="text"
name="model"
value="<?php echo $row['model']; ?>">

<label>IP Address</label>

<input type="text"
name="ip_address"
value="<?php echo $row['ip_address']; ?>">

<label>Location</label>

<input type="text"
name="location"
value="<?php echo $row['location']; ?>">

<label>Status</label>

<input type="text"
name="status"
value="<?php echo $row['status']; ?>">

<br><br>

<button type="submit">

Update Device

</button>

</form>

<br>

<a href="view_devices.php">

Back

</a>

</div>

</body>

</html>