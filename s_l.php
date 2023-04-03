<!DOCTYPE html>
<html>
<head>
	<title>Petcare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/s_l.css">
</head>
<body>
	<div class="background">
		<div class="overlay">
			<div class="content">
				<h1>Welcome to Petcare</h1>
                <h5>You can count on us</h5>
				<button class="button" onclick="redirectToSignUp()">Sign Up</button>
				<button class="button" onclick="redirectToLogIn()">Log In</button>
			</div>
		</div>
	</div>
    <script>
		function redirectToSignUp() {
			window.location.href = "register.php"; 
		}

		function redirectToLogIn() {
			window.location.href = "login.php"; 
		}
	</script>
</body>
</html>
