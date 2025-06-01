<?php
session_start();
include('../includes/db.php');


if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'driver') {
    header("Location: login.php");
    exit();
}

$driver_id = $_SESSION['user_id'];

if (isset($_GET['complete'])) {
    $ride_id = intval($_GET['complete']);
    $stmt = $conn->prepare("UPDATE rides SET status = 'completed' WHERE id = ? AND driver_id = ?");
    $stmt->bind_param("ii", $ride_id, $driver_id);
    $stmt->execute();
}

if (isset($_GET['cancel'])) {
    $ride_id = intval($_GET['cancel']);
    $stmt = $conn->prepare("UPDATE rides SET status = 'cancelled' WHERE id = ? AND driver_id = ?");
    $stmt->bind_param("ii", $ride_id, $driver_id);
    $stmt->execute();
}

if (isset($_GET['accept'])) {
    $ride_id = intval($_GET['accept']);
    $stmt = $conn->prepare("SELECT * FROM rides WHERE id = ? AND status = 'pending'");
    $stmt->bind_param("i", $ride_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $stmt = $conn->prepare("UPDATE rides SET driver_id = ?, status = 'accepted' WHERE id = ?");
        $stmt->bind_param("ii", $driver_id, $ride_id);
        $stmt->execute();
    }
}

$pending = $conn->query("SELECT * FROM rides WHERE status = 'pending'");
$stmt = $conn->prepare("SELECT * FROM rides WHERE driver_id = ?");
$stmt->bind_param("i", $driver_id);
$stmt->execute();
$accepted = $stmt->get_result();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?></h2>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <h3>Pending Rides</h3>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr><th>ID</th><th>Pickup</th><th>Dropoff</th><th>Action</th></tr>
        </thead>
        <tbody>
            <?php if ($pending->num_rows > 0): ?>
                <?php while ($ride = $pending->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $ride['id']; ?></td>
                        <td><?php echo htmlspecialchars($ride['pickup']); ?></td>
                        <td><?php echo htmlspecialchars($ride['dropoff']); ?></td>
                        <td><a href="?accept=<?php echo $ride['id']; ?>" class="btn btn-success btn-sm">Accept</a></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="4" class="text-center">No pending rides available.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <h3>Your Accepted Rides</h3>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr><th>ID</th><th>Pickup</th><th>Dropoff</th><th>Status</th><th>Action</th></tr>
        </thead>
        <tbody>
            <?php if ($accepted->num_rows > 0): ?>
                <?php while ($ride = $accepted->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $ride['id']; ?></td>
                        <td><?php echo htmlspecialchars($ride['pickup']); ?></td>
                        <td><?php echo htmlspecialchars($ride['dropoff']); ?></td>
                        <td><?php echo ucfirst(htmlspecialchars($ride['status'])); ?></td>
                        <td>
                            <?php if ($ride['status'] == 'accepted'): ?>
                                <a href="?complete=<?php echo $ride['id']; ?>" class="btn btn-success btn-sm">Complete</a>
                                <a href="?cancel=<?php echo $ride['id']; ?>" class="btn btn-danger btn-sm">Cancel</a>
                            <?php else: ?>
                                <span class="text-muted">No actions</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="5" class="text-center">No accepted rides.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

