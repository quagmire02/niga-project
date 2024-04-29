<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit;
}

// Include database connection
include("connection.php");

// Fetch appointments for the logged-in user
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM appointments WHERE user_id = '$user_id'";
$result = mysqli_query($con, $query);

// Check if appointments are found
if ($result && mysqli_num_rows($result) > 0) {
    // Fetch and store appointments data in an array
    $appointments = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $appointments[] = $row;
    }
} else {
    // No appointments found
    $appointments = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Appointments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .appointment {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        .appointment h3 {
            margin-top: 0;
            color: #333;
        }

        .appointment p {
            margin-bottom: 10px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>My Appointments</h1>
        <?php
        // Display appointments if found
        if (!empty($appointments)) {
            foreach ($appointments as $appointment) {
                echo '<div class="appointment">';
                echo '<h3>' . htmlspecialchars($appointment['name_of_the_counselor']) . '</h3>';
                echo '<p>Date: ' . htmlspecialchars($appointment['date']) . '</p>';
                echo '<p>Time: ' . htmlspecialchars($appointment['time']) . '</p>';
                echo '<p>Message: ' . htmlspecialchars($appointment['message']) . '</p>';
                echo '</div>';
            }
        } else {
            echo '<p>No appointments found.</p>';
        }
        ?>
    </div>
</body>
</html>

