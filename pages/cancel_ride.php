<?php
session_start();
include('../includes/db.php');

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'customer') {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ride_id'])) {
    $ride_id = (int)$_POST['ride_id'];
    $user_id = $_SESSION['user_id'];

    // Check if the ride belongs to this user and is cancellable (pending or accepted)
    $stmt = $conn->prepare("SELECT status FROM rides WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ii", $ride_id, $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $ride = $result->fetch_assoc();
        $status = strtolower($ride['status']);

        if (in_array($status, ['pending', 'accepted'])) {
            // Update status to 'cancelled'
            $update_stmt = $conn->prepare("UPDATE rides SET status = 'cancelled' WHERE id = ? AND user_id = ?");
            $update_stmt->bind_param("ii", $ride_id, $user_id);
            if ($update_stmt->execute()) {
                $_SESSION['message'] = "Ride #$ride_id has been cancelled successfully.";
            } else {
                $_SESSION['message'] = "Failed to cancel the ride. Please try again.";
            }
            $update_stmt->close();
        } else {
            $_SESSION['message'] = "This ride cannot be cancelled.";
        }
    } else {
        $_SESSION['message'] = "Ride not found or you don't have permission to cancel this ride.";
    }

    $stmt->close();
} else {
    $_SESSION['message'] = "Invalid request.";
}

header("Location: user_dashboard.php");
exit();
