<?php
session_start();
$_SESSION;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Experts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php/#about">About</a></li>
            <li><a href="index.php#contact">Contact</a></li>
	    <li><a href="experts.php">Experts</a></li>
  
        </ul>
    </nav>

    <!-- Experts Section -->
    <section id="experts">
        <h2>Our Experts</h2>
        <!-- Expert 1 -->
        <section class="expert" id="expert1">
            <h3>Dr. John Doe</h3>
            <p>Psychiatrist</p>
            <p>Specializes in mood disorders and anxiety.</p>
            <button><a href="/login/booker.php?expert=John%20Doe">Book an appointment</a></button>
        </section>
    
        <!-- Expert 2 -->
        <section class="expert" id="expert2">
            <h3>Dr. Jane Smith</h3>
            <p>Psychologist</p>
            <p>Focuses on cognitive-behavioral therapy and trauma recovery.</p>
            <button><a href="/login/booker.php?expert=Jane%20Smith">Book an appointment</a></button>
        </section>
    
        <!-- Expert 3 -->
        <section class="expert" id="expert3">
            <h3>Emily Johnson</h3>
            <p>Licensed Counselor</p>
            <p>Provides individual and group counseling for stress management.</p>
            <button><a href="/login/booker.php?expert=Emily%20Johnson">Book an appointment</a></button>
        </section>
    </section>
	<!-- Review Button -->
	<div style="text-align: center; margin-top: 20px;">
        <button><a href="reviews.php">Review</a></button>
    </div>
</body>
</html>

    <style type='text/css'>
	body, html {
    	margin: 0;
    	padding: 0;
    	font-family: Arial, sans-serif;
    }

	nav {
    	background-color: #101419;
    	color: #fff;
    	text-align: center;
    	padding: 12px 0;
    }

	nav ul {
    	list-style: none;
    	padding: 0;
    }

	nav ul li {
    	display: inline-block;
    	margin-right: 20px;
    }

	nav ul li a {
    	text-decoration: none;
    	color: #fff;
    	font-weight: bold;
    }

/* Experts Section */
	#experts {
    	padding: 50px 0;
    	text-align: center;
    }

	#experts h2 {
    	font-size: 3rem;
    	margin-bottom: 40px;
    }

	.expert {
    	background-color: #ad8989;
    	color: #333;
    	padding: 20px;
    	margin-bottom: 20px;
    	border-radius: 8px;
    }

	.expert h3 {
    	font-size: 2rem;
    	margin-bottom: 10px;
    }

	.expert p {
    	font-size: 1.5rem;
    	margin-bottom: 20px;
    }

	.expert button {
    	background-color: #333;
    	color: #fff;
    	border: none;
    	padding: 10px 20px;
    	font-size: 1rem;
    	cursor: pointer;
    	transition: background-color 0.3s ease;
    }

	.expert button a {
    	color: #fff;
    	text-decoration: none;
    }

	.expert button:hover {
    	background-color: #555;
    }
  
        button:hover,
	a:hover {
    	background-color: #555;
    	color: #fff;
    	transition: background-color 0.45s ease, color 0.45s ease;
   }

	section {
    	transition: transform 0.45s ease;
    }

	section:hover {
    	transform: scale(1.16);
    }


