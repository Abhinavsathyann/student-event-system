<?php
include '../app/config/database.php';
$database = new Database();
$db = $database->connect();
$totalUsers = $db->query("SELECT COUNT(*) FROM users")->fetchColumn();
$totalEvents = $db->query("SELECT COUNT(*) FROM events")->fetchColumn();
$totalRegs = $db->query("SELECT COUNT(*) FROM registrations")->fetchColumn();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand mx-3" href="#">Admin Panel</a>
</nav>

<div class="container my-5">
  <h3>Dashboard Overview</h3>
  <div class="row text-center">
    <div class="col-md-4">
      <div class="card bg-info text-white p-3">
        <h4><?php echo $totalUsers; ?></h4>
        <p>Registered Users</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card bg-success text-white p-3">
        <h4><?php echo $totalEvents; ?></h4>
        <p>Total Events</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card bg-warning text-white p-3">
        <h4><?php echo $totalRegs; ?></h4>
        <p>Event Registrations</p>
      </div>
    </div>
  </div>
  <canvas id="statsChart" class="mt-5"></canvas>
</div>

<script>
const ctx = document.getElementById('statsChart');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Users', 'Events', 'Registrations'],
    datasets: [{
      label: 'Platform Stats',
      data: [<?php echo $totalUsers; ?>, <?php echo $totalEvents; ?>, <?php echo $totalRegs; ?>],
      borderWidth: 1
    }]
  }
});
</script>
</body>
</html>
