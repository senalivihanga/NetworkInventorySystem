<?php

include("db.php");

$device_name = $_POST['device_name'];
$device_type = $_POST['device_type'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$ip_address = $_POST['ip_address'];
$location = $_POST['location'];
$status = $_POST['status'];

$check = "SELECT * FROM devices WHERE ip_address='$ip_address'";
$result = mysqli_query($conn,$check);

if(mysqli_num_rows($result) > 0){
    echo "<script>
        alert('This IP Address already exists!');
        window.location='add_device.php';
    </script>";
    exit();
}

$sql = "INSERT INTO devices
(device_name, device_type, brand, model, ip_address, location, status)
VALUES
('$device_name', '$device_type', '$brand', '$model', '$ip_address', '$location', '$status')";

if(mysqli_query($conn, $sql)){
    echo "<script>
        alert('Device Saved Successfully');
        window.location='dashboard.php';
    </script>";
}
else{
    echo "Error: " . mysqli_error($conn);
}

?>