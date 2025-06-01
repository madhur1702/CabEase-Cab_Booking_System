<?php
session_start();
include('../includes/db.php');

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'customer') {
    header("Location: login.php");
    exit();
}

$message = '';

$nearbyLocations = [
    "Deopur",
    "Walwadi",
    "Mahindale",
    "Awadhan",
    "Shirpur",
    "Sakri",
    "Sindkheda",
    "Dondaicha",
    "Songir",
    "Kapadne",
    "Kusumbe",
    "Ram Nagar",
    "Vaibhav Nagar",
    "Subhash Nagar",
    "Old Agra Road",
    "Chalisgaon Road",
    "Ambika Nagar",
    "Ramchandra Nagar",
    "Shivaji Nagar",
    "Jamnagiri Road",
    "Old Dhule",
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pickup = htmlspecialchars($_POST['pickup']);
    $dropoff = htmlspecialchars($_POST['dropoff']);
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO rides (user_id, pickup, dropoff, status) VALUES (?, ?, ?, 'pending')");
    $stmt->bind_param("iss", $user_id, $pickup, $dropoff);

    if ($stmt->execute()) {
        header("Location: user_dashboard.php");
        exit();
    } else {
        $message = "Error booking ride.";
    }
}
?>

<div class="form-box">
    <h2>Book a Ride</h2>
    <?php if ($message) echo "<p style='color:green;'>$message</p>"; ?>
    <form method="POST">
        <label for="pickup">Pickup Location:</label>
        <input list="locations" id="pickup" name="pickup" required placeholder="Pickup Location">

        <label for="dropoff">Dropoff Location:</label>
        <input list="locations" id="dropoff" name="dropoff" required placeholder="Dropoff Location">

        <datalist id="locations">
            <?php foreach ($nearbyLocations as $loc) echo "<option value=\"$loc\">"; ?>
        </datalist>

        <button type="submit" class="btn">Submit</button>
    </form>
</div>


  <link rel="stylesheet" href="../assets/css/style.css" />