<?php
session_start();
require_once '../includes/db.php';
$ride_id = $_GET['id'];
$driver_id = $_SESSION['user_id'];
$conn->query("UPDATE rides SET driver_id = $driver_id, status = 'accepted' WHERE id = $ride_id");
header("Location: driver-dashboard.php");
exit();
?>