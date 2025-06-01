<?php
session_start();
require_once '../includes/db.php';
$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];
if ($role == 'user') {
    $sql = "SELECT * FROM rides WHERE user_id = $user_id";
} else {
    $sql = "SELECT * FROM rides WHERE driver_id = $user_id";
}
$res = $conn->query($sql);
?>
<h1>Ride History</h1>
<?php while ($row = $res->fetch_assoc()): ?>
    <p>Pickup: <?= $row['pickup_location'] ?> | Drop: <?= $row['drop_location'] ?> | Status: <?= $row['status'] ?></p>
<?php endwhile; ?>
<a href="<?= $role == 'user' ? 'dashboard.php' : 'driver-dashboard.php' ?>">Back</a>