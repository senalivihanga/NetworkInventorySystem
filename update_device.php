<?php

include("db.php");

$id=$_POST['id'];

$device_name=$_POST['device_name'];
$device_type=$_POST['device_type'];
$brand=$_POST['brand'];
$model=$_POST['model'];
$ip_address=$_POST['ip_address'];
$location=$_POST['location'];
$status=$_POST['status'];

$sql="UPDATE devices SET

device_name='$device_name',

device_type='$device_type',

brand='$brand',

model='$model',

ip_address='$ip_address',

location='$location',

status='$status'

WHERE id=$id";

if(mysqli_query($conn,$sql)){

echo "<script>

alert('Device Updated Successfully');

window.location='view_devices.php';

</script>";

}
else{

echo "Update Failed";

}

?>