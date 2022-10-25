<?php
    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");
?>

<html lang="eng">
<head>
	<title> Welcome To Slotify! </title>
</head>
<body>
	
	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login To Your Account</h2>
			<p>
				<label for="LoqinUsername">Username</label>
				<input id="LoqinUsername" name="LoqinUsername" type="text" placeholder="e.g bartSimpson" required>
			</p>
			<p>
				<label for="LoginPassword">Password</label>
				<input id="LoginPassword" name="LoginPassword" type="password" placeholder="Your password" required>
			</p>
			
			<button type="submit" name="LoginButton">LOG IN</button>
			
		</form>

		<form id="registerForm" action="register.php" method="POST">
			<h2>Create your free account</h2>

			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="e.g bartSimpson" required>
			</p>

			<p>
				<label for="firstName">First name</label>
				<input id="firstName" name="firstName" type="text" placeholder="e.g Bart" required>
			</p>


			<p>
				<label for="lastName">Last name</label>
				<input id="lastName" name="lastName" type="text" placeholder="e.g Simpson" required>
			</p>

			<p>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="e.g bart@gmail.com" required>
			</p>

			<p>
				<label for="email2">Confirm email</label>
				<input id="email2" name="email2" type="email" placeholder="e.g bart@gmail.com" required>
			</p>

			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Your password" required>
			</p>

			<p>
				<label for="password2">Confirm password</label>
				<input id="password2" name="password2" type="password" placeholder="Your password" required>
			</p>
			
			<button type="submit" name="registerButton">SIGN IN</button>
			
		</form>

	</div>

	
</body>
</html>