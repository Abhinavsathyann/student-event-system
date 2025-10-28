<?php
session_start();
include '../config/db.php';
$result = mysqli_query($conn, "SELECT * FROM events ORDER BY date DESC");
echo "<h2>Upcoming Events</h2>";
while($row = mysqli_fetch_assoc($result)){
  echo "<div>
          <h3>{$row['title']}</h3>
          <p>{$row['description']}</p>
          <p>{$row['date']} at {$row['location']}</p>
          <a href='event_register.php?event_id={$row['id']}'>Register</a>
        </div>";
}
?>
