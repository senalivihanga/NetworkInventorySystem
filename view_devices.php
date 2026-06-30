<?php
include("db.php");

session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

if(!isset($conn)){
    die("Database connection failed");
}

$sql = "SELECT * FROM devices";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>View Devices</title>

<link rel="stylesheet" href="css/style.css">

<style>
body{
    font-family:Arial;
    background:#0f172a;
    color:white;
}

table{
    width:95%;
    margin:auto;
    border-collapse:collapse;
    background:white;
    color:black;
}

th,td{
    padding:10px;
    border:1px solid #ccc;
    text-align:center;
}

th{
    background:#2563eb;
    color:white;
}

.search{
    text-align:center;
    margin:20px;
}
</style>

<script src="js/validation.js"></script>

</head>

<body>

<h2 style="text-align:center">All Devices</h2>

<div class="search">
<input type="text" id="searchInput" onkeyup="liveSearch()" placeholder="Search devices...">
</div>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Type</th>
<th>Brand</th>
<th>Model</th>
<th>IP</th>
<th>Location</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['device_name']; ?></td>
<td><?php echo $row['device_type']; ?></td>
<td><?php echo $row['brand']; ?></td>
<td><?php echo $row['model']; ?></td>
<td><?php echo $row['ip_address']; ?></td>
<td><?php echo $row['location']; ?></td>

<td>
<?php
if($row['status']=="Active"){
    echo "<span style='color:green;font-weight:bold'>Active</span>";
}
elseif($row['status']=="Inactive"){
    echo "<span style='color:red;font-weight:bold'>Inactive</span>";
}
else{
    echo "<span style='color:orange;font-weight:bold'>Maintenance</span>";
}
?>
</td>

<td>
<a href="edit_device.php?id=<?php echo $row['id']; ?>">Edit</a> |
<a href="delete_device.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this device?')">Delete</a>
</td>

</tr>

<?php } ?>

</table>

</body>
</html>