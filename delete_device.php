<?php

include("db.php");

$id = $_GET['id'];

$sql = "DELETE FROM devices WHERE id=$id";

if(mysqli_query($conn,$sql)){
    echo "<script>
        alert('Device Deleted Successfully');
        window.location='view_devices.php';
    </script>";
}

?>