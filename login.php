<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>


    <style type='text/css'>
	{
   	font-family: 'Poppins', sans-serif;
   	margin:0; padding:0;
   	box-sizing: border-box;
   	outline: none; border:none;
   	text-decoration: none;
   }

	.container{
   	min-height: 100vh;
   	display: flex;
   	align-items: center;
   	justify-content: center;
   	padding:20px;
   	padding-bottom: 60px;
   }

	.container .content{
   	text-align: center;
   }

	.container .content h3{
   	font-size: 30px;
   	color:#333;
   }

	.container .content h3 span{
   	background: crimson;
   	color:#fff;
   	border-radius: 5px;
   	padding:0 15px;
   }

	.container .content h1{
   	font-size: 50px;
   	color:#333;
   }

	.container .content h1 span{
   	color:crimson;
   }

	.container .content p{
   	font-size: 25px;
   	margin-bottom: 20px;
   }

	.container .content .btn{
   	display: inline-block;
   	padding:10px 30px;
   	font-size: 20px;
   	background: #333;
   	color:#fff;
   	margin:0 5px;
   	text-transform: capitalize;
   }

	.container .content .btn:hover{
   	background: crimson;
   }

	.form-container{
   	min-height: 100vh;
   	display: flex;
   	align-items: center;
   	justify-content: center;
   	padding:20px;
   	padding-bottom: 60px;
   	background: #eee;
   }

	.form-container form{
   	padding:20px;
   	border-radius: 5px;
   	box-shadow: 0 5px 10px rgba(0,0,0,.1);
   	background: #fff;
   	text-align: center;
   	width: 500px;
   }

	.form-container form h3{
   	font-size: 30px;
   	text-transform: uppercase;
   	margin-bottom: 10px;
   	color:#333;
   }

	.form-container form input,
	.form-container form select{
   	width: 100%;
   	padding:10px 15px;
   	font-size: 17px;
   	margin:8px 0;
   	background: #eee;
   	border-radius: 5px;
   }

	.form-container form select option{
   	background: #fff;
   }

	.form-container form .form-btn{
   	background: #fbd0d9;
   	color:crimson;
   	text-transform: capitalize;
   	font-size: 20px;
   	cursor: pointer;
   }

	.form-container form .form-btn:hover{
   	background: crimson;
   	color:#fff;
   }

	.form-container form p{
   	margin-top: 10px;
   	font-size: 20px;
   	color:#333;
   }

	.form-container form p a{
   	color:crimson;
   }

	.form-container form .error-msg{
   	margin:10px 0;
   	display: block;
   	background: crimson;
   	color:#fff;
   	border-radius: 5px;
   	font-size: 20px;
   	padding:10px;
   }