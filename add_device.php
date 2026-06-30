<?php

session_start();

if(!isset($_SESSION['username']))
{
header("Location:login.php");
exit();
}

?>

<!DOCTYPE html>

<html>

<head>

<title>Add Device</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="login-container">

<h2>Add Network Device</h2>

<form action="save_device.php" method="POST">

<label>Device Name</label>

<input type="text" name="device_name">

<label>Device Type</label>

<select name="device_type">

<option>Router</option>

<option>Switch</option>

<option>Firewall</option>

<option>Access Point</option>

<option>Server</option>

<option>PC</option>

</select>

<br><br>

<label>Brand</label>

<input type="text" name="brand">

<label>Model</label>

<input type="text" name="model">

<label>IP Address</label>

<input type="text" name="ip_address">

<label>Location</label>

<input type="text" name="location">

<label>Status</label>

<select name="status">

<option>Active</option>

<option>Inactive</option>

<option>Maintenance</option>

</select>

<br><br>

<button type="submit">

Save Device

</button>

</form>

<br>

<a href="dashboard.php">

Back Dashboard

</a>

</div>

</body>

</html>