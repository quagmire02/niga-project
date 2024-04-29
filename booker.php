<?php
session_start();

if(!isset($_SESSION['user_id'])) {
    // If the user is not logged in, redirect them to the login page
    header(" login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointment Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Book an Appointment</h1>
        <form action="book_appointment.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Your Phone Number:</label>
            <input type="text" id="phone" name="phone" required>

	    <label for="counselor name">Counselor Name:</label>
            <input type="text" id="name_of_the_counselor" name="name_of_the_counselor" required>

            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Preferred Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="message">Additional Message:</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <input type="submit" value="Book Appointment">
        </form>
    </div>

</body>
</html>