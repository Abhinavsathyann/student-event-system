<?php
include '../config/db.php';
$events = mysqli_query($conn, "SELECT * FROM events");
echo "<h2>All Events</h2>";
while($e = mysqli_fetch_assoc($events)){
  echo "<div>{$e['title']} — {$e['date']}</div>";
}
?>
<a href='add_event.php'>Add New Event</a> | <a href='view_registrations.php'>View Registrations</a>
