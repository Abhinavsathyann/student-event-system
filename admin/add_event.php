<?php
include '../config/db.php';
if(isset($_POST['add'])){
  $title = $_POST['title'];
  $desc = $_POST['description'];
  $date = $_POST['date'];
  $loc = $_POST['location'];
  $sql = "INSERT INTO events(title, description, date, location) VALUES('$title','$desc','$date','$loc')";
  if(mysqli_query($conn, $sql)){
    echo "<script>alert('Event Added');</script>";
  }
}
?>
<form method="post">
  <input type="text" name="title" placeholder="Event Title" required><br>
  <textarea name="description" placeholder="Description" required></textarea><br>
  <input type="date" name="date" required><br>
  <input type="text" name="location" placeholder="Location" required><br>
  <button name="add">Add Event</button>
</form>
