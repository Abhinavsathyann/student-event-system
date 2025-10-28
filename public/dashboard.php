<?php
session_start();
include '../app/config/database.php';
include '../app/models/Event.php';

$database = new Database();
$db = $database->connect();

$event = new Event($db);
$stmt = $event->readAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Dashboard | Campus Event Portal</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand mx-3" href="#">🎓 Campus Event Portal</a>
  <a class="btn btn-outline-light ms-auto" href="logout.php">Logout</a>
</nav>

<div class="container mt-5">
  <h3 class="mb-4">Upcoming Events</h3>
  <div class="row">
  <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
    <div class="col-md-4 mb-4">
      <div class="card shadow">
        <img src="../uploads/<?php echo $row['image']; ?>" class="card-img-top" height="180">
        <div class="card-body">
          <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
          <p class="text-muted mb-1"><?php echo $row['date']; ?> • <?php echo $row['location']; ?></p>
          <p><?php echo substr($row['description'], 0, 80).'...'; ?></p>
          <a href="event_details.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">View Details</a>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
  </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
