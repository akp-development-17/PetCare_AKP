<!DOCTYPE html>
<html>

<head>
	<title>Petcare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/register.css">
</head>

<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$FullName = $_POST['FullName'];
		$userId = $_POST['userId'];
		$password = $_POST['password'];

		$con = mysqli_connect("localhost", "root", "", "petcare");
		$query = "INSERT INTO users (FullName,userId,password) VALUES('$FullName','$userId','$password')";
		$result = mysqli_query($con, $query);
		if ($result) {
			echo ("Registeration Successfull");
			header("location:login.php");
		} else {
			echo ("Registeration Failed");
		}
	}
	?>
	<div class="background">
		<div class="form-container">
			<form action="" method="POST">
				<h1>Register here!</h1>
				<div class="form-group">
					<label for="FullName">Full Name</label>
					<input type="text" id="FullName" name="FullName" placeholder="Enter your full name" required>
				</div>
				<div class="form-group">
					<label for="userId">UserId</label>
					<input type="text" id="userId" name="userId" placeholder="Choose a username" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id="password" name="password" placeholder="Choose a password" required>
				</div>
				<button type="submit">Sign Up</button>
				<h3><a href="login.php" class="already">Already signed up?...Login</a></h3>
			</form>
		</div>
	</div>

</body>

</html>