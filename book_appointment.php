<?php
session_start();

include("connection.php");
include("functions.php");

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit;
}

// User is logged in, continue with appointment booking

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $message = $_POST["message"];
    $name_of_the_counselor = $_POST["name_of_the_counselor"];

    // Validate form data (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($phone) || empty($date) || empty($time) || empty($name_of_the_counselor)) {
        echo "Please fill in all required fields.";
    } else {
        // Save the appointment details to the database
        $user_id = $_SESSION['user_id'];

        $query = "INSERT INTO appointments (user_id, name, email, phone, date, time, message, name_of_the_counselor) VALUES ('$user_id', '$name', '$email', '$phone', '$date', '$time', '$message', '$name_of_the_counselor')";

        if (mysqli_query($con, $query)) {
            echo "Appointment booked successfully!<br>";
            echo "Name: $name<br>";
            echo "Email: $email<br>";
            echo "Phone: $phone<br>";
            echo "Date: $date<br>";
            echo "Time: $time<br>";
            echo "Message: $message";
       	    echo '<button onclick="window.location.href=\'experts.php\'">Book Another Appointment</button>';
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
} else {
    // If the form is not submitted, redirect back to the appointment form page
    header("Location: appointment_form.html");
    exit;
}
?>
