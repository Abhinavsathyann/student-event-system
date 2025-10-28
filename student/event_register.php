<?php
session_start();
include '../config/db.php';

$user_id = $_SESSION['user_id'];
$event_id = $_GET['event_id'];

$sql = "INSERT INTO registrations(user_id, event_id, timestamp) VALUES('$user_id','$event_id',NOW())";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Registered successfully!'); window.location='dashboard.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
