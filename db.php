<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "network_inventory_db";

$conn = mysqli_connect("localhost","root","","network_inventory_db");

if(!$conn){
    die("Database Connection Failed");
}

?>