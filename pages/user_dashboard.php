<?php
session_start();
include('../includes/db.php');


if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'customer') {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Display session message if set
if (isset($_SESSION['message'])) {
    echo '<div class="alert alert-info text-center my-3">' . htmlspecialchars($_SESSION['message']) . '</div>';
    unset($_SESSION['message']);
}

$stmt = $conn->prepare("
    SELECT rides.*, users.name AS driver_name
    FROM rides
    LEFT JOIN users ON rides.driver_id = users.id
    WHERE rides.user_id = ?
    ORDER BY rides.id DESC
");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?></h2>
        <div>
            <a href="book_ride.php" class="btn btn-success me-2">Book a Ride</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <h4>Your Rides</h4>

    <?php if ($result->num_rows === 0): ?>
        <div class="alert alert-info">No rides booked yet. Start by booking your first ride!</div>
    <?php else: ?>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php while ($ride = $result->fetch_assoc()): ?>
                <div class="col">
                    <div class="card h-100 shadow-sm d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Ride #<?php echo (int)$ride['id']; ?></h5>
                            <p><strong>Pickup:</strong> <?php echo htmlspecialchars($ride['pickup']); ?></p>
                            <p><strong>Dropoff:</strong> <?php echo htmlspecialchars($ride['dropoff']); ?></p>
                            <p><strong>Status:</strong> 
                                <span class="badge 
                                    <?php
                                        $status = strtolower($ride['status']);
                                        echo $status === 'pending' ? 'bg-warning text-dark' : 
                                             ($status === 'accepted' ? 'bg-info text-dark' :
                                             ($status === 'completed' ? 'bg-success text-white' : 'bg-danger text-white'));
                                    ?>">
                                    <?php echo ucfirst($ride['status']); ?>
                                </span>
                            </p>
                            <?php if ($ride['driver_name']): ?>
                                <p><strong>Driver:</strong> <?php echo htmlspecialchars($ride['driver_name']); ?></p>
                            <?php endif; ?>

                            <!-- Cancel Ride Button for pending or accepted rides -->
                            <?php if (in_array($status, ['pending', 'accepted'])): ?>
                                <form action="cancel_ride.php" method="POST" onsubmit="return confirm('Are you sure you want to cancel this ride?');" class="mt-auto">
                                    <input type="hidden" name="ride_id" value="<?php echo (int)$ride['id']; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm w-100">Cancel Ride</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

