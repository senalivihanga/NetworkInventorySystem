<?php
session_start();
include("db.php");

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

if(!isset($conn) || !$conn){
    die("Database connection failed");
}

/* 📊 Device counts */
$total = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) as c FROM devices"))['c'];

$active = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) as c FROM devices WHERE status='Active'"))['c'];

$inactive = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) as c FROM devices WHERE status='Inactive'"))['c'];

$maintenance = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) as c FROM devices WHERE status='Maintenance'"))['c'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
body{
    font-family:Arial;
    margin:0;
    background:#f1f5f9;
    transition:0.3s;
}

.container{
    padding:20px;
}

/* TOP BAR */
.topbar{
    display:flex;
    justify-content:space-between;
    background:#1e293b;
    color:white;
    padding:15px;
}

/* CARDS */
.card-container{
    display:flex;
    gap:15px;
    flex-wrap:wrap;
    margin-top:20px;
}

.card{
    flex:1;
    min-width:200px;
    padding:20px;
    border-radius:10px;
    color:white;
}

.blue{background:#2563eb;}
.green{background:#16a34a;}
.red{background:#dc2626;}
.yellow{background:#ca8a04;}

/* BUTTONS */
.buttons{
    margin-top:20px;
}

button{
    padding:10px;
    margin:5px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

/* DARK MODE */
body.dark{
    background:#0f172a;
    color:white;
}

body.dark .topbar{
    background:#0f172a;
}

body.dark .card{
    color:white;
}

</style>

<script>
function toggleMode(){
    document.body.classList.toggle("dark");
}
</script>

</head>

<body>

<div class="topbar">
<h2>Network Inventory Dashboard</h2>
<div>Welcome <?php echo $_SESSION['username']; ?></div>
</div>

<div class="container">

<!-- CARDS -->
<div class="card-container">

<div class="card blue">
<h3>Total Devices</h3>
<h2><?php echo $total; ?></h2>
</div>

<div class="card green">
<h3>Active</h3>
<h2><?php echo $active; ?></h2>
</div>

<div class="card red">
<h3>Inactive</h3>
<h2><?php echo $inactive; ?></h2>
</div>

<div class="card yellow">
<h3>Maintenance</h3>
<h2><?php echo $maintenance; ?></h2>
</div>

</div>

<!-- PIE CHART -->
<br><br>
<h3>Device Status Overview</h3>
<div style="width:200px; margin:auto;">
    <canvas id="statusChart"></canvas>
</div>

<!-- BUTTONS -->
<div class="buttons">

<a href="add_device.php"><button>Add Device</button></a>
<a href="view_devices.php"><button>View Devices</button></a>
<a href="logout.php"><button>Logout</button></a>

<button onclick="toggleMode()">Dark / Light Mode</button>

</div>

</div>

<!-- PIE CHART SCRIPT -->
<script>
const ctx = document.getElementById('statusChart');

new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Active', 'Inactive', 'Maintenance'],
        datasets: [{
            data: [
                <?php echo $active; ?>,
                <?php echo $inactive; ?>,
                <?php echo $maintenance; ?>
            ],
            backgroundColor: [
                '#16a34a',
                '#dc2626',
                '#ca8a04'
            ]
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                labels: {
                    color: 'black'
                }
            }
        }
    }
});
</script>

</body>
</html>