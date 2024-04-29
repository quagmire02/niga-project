<?php
session_start();

   $_SESSION;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Directory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navigation Bar -->
<nav>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="experts.php">Experts</a></li>
        <li><a href="appointments.php">Appointment</a></li>
	<li><a href="logout.php">Logout</a></li>

    </ul>
</nav>

<!-- Home Section -->
<section id="home">
    <div class="content">
        <h1>Polaris - Your Guide to Professional Counseling and Psychiatry</h1>
        <p>Welcome to Polaris, your comprehensive resource for connecting with top-tier counselors and psychiatrists across the country. We understand that seeking support for mental health concerns can be a daunting task, and our platform is designed to make this process as seamless and accessible as possible.</p>

            </div>
</section>

<!-- About Section (Separate Page) -->
<section id="about">
    <h2>About Us</h2>
    <p>At Polaris, we are committed to facilitating meaningful connections between individuals seeking support and qualified mental health professionals. Our platform features a carefully curated directory of counselors and psychiatrists who possess the expertise and compassion needed to address a wide range of mental health challenges.</p>
    <h3>What We Offer</h3>
    <p><b>Comprehensive Directory:</b> Our directory includes profiles of counselors and psychiatrists from various specialties and backgrounds, allowing users to find the perfect match for their unique needs.<p>
    <p><b>User Reviews:</b> Hear from real clients about their experiences with different mental health professionals, helping you make informed decisions about your care.</p>
    <p><b>Resources and Articles:</b> Access informative articles and resources on mental health topics, providing valuable insights and support along your journey.</p>

</section>


<!-- Experts Section (New) -->

    <!-- Add more experts as needed -->
</section>
<!-- Contact Section (Separate Page) -->
<section id="contact">
    <h2>Contact Us</h2>
    <p>Email: polarizz@email.com</p>
    <p>Phone: +123 456 7890</p>

</section>

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

	#home {
    	background-color: #eed7c5;
    	color: #333;
    	text-align: center;
    	padding: 160px 0;
    }

	#home .content {
    	max-width: 1000px;
   	margin: auto;
    	display: flex;
    	align-items: center;
    	justify-content: space-between;
    }

	#home .intro {
    	flex: 2;
    	padding-right: 30px;
    }

	#home img {
        max-width: 100%;
    	max-height: 350px;
    	height: auto;
    	border-radius: 50%;
    }




	#home button {
    	background-color: #333;
    	color: #fff;
    	border: none;
    	padding: 15px 25px;
    	font-size: 1rem;
    	cursor: pointer;
    	transition: background-color 0.3s ease;
    }

	#home button a {
    	color: #fff;
    	text-decoration: none;
    }

	#home button:hover {
    	background-color: #555;
    }


	#about {
    	background-color: #b1a7a6;
    	color: #333;
    	text-align: center;
    	padding: 150px 0;
    }

	#about h2 {
    	font-size: 2.0rem;
    	margin-bottom: 30px;
    }

	#about h3 {
    	font-size: 1.2rem;
   	margin-bottom: 30px;
    }

	#about p {
    	font-size: 1.0rem;
    	margin-bottom: 30px;
    }


	#contact {
    	background-color: #161a1d;
    	color: #fff;
    	text-align: center;
    	padding: 50px 0;
    }

	#contact h2 {
    	font-size: 1.6rem;
   	margin-bottom: 20px;
    }

#contact p {
    font-size: 1.1rem;
    margin-bottom: 15px;
}

#contact a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
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


#home img {
    max-width: 100%;
    max-height: 400px;
    height: auto;
    border-radius: 50%;
    margin-bottom: 20px;
  }
}

/* ... (previous styles) ... */

/* ... (previous styles) ... */

/* Experts Section */
	#experts {
    	background-color: #ad8989;
    	color: #333;
    	text-align: center;
    	padding: 120px 0;
    }

	#experts h2 {
    	font-size: 3rem;
    	margin-bottom: 40px;
    }

	.expert {
    	margin-bottom: 50px;
    }

	.expert h3 {
    	font-size: 2rem;
    	margin-bottom: 20px;
    }

	.expert p {
    	font-size: 1.5rem;
   	margin-bottom: 40px;
    }

/* Responsive adjustments */
@media screen and (max-width: 768px) {
    .content {
        flex-direction: column;
    }

    #home img {
        max-height: 250px;
    }
}

