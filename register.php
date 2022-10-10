
<?php

	if(isset($_POST['LoginButton'])){
		echo "Login button was pressed";
	}

?>

<html>
<head>
	<title> Welcome To Slotify! </title>
</head>
<body>
	
	<div id="inputcontainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login To Your Account</h2>
			<p>
				<label for="Loqinusername">Username</label>
				<input id="Loginusername" name="loginusername" type="text" placeholder="e.g bartSimpson" required>
			</p>
			<p>
				<label for="LoginPassword">Password</label>
				<input id="LoginPassword" name="loginusername" type="Password" placeholder="Your password" required>
			</p>
			
			<button type="submit" name="LoginButton">LOG IN</button>
			
		</form>

		<form id="registerForm" action="register.php" method="POST">
			<h2>Create your free accountt</h2>

			<p>
				<label for="username">Username</label>
				<input id="username" name="loginusername" type="text" placeholder="e.g bartSimpson" required>
			</p>

			<p>
				<label for="firstname">First name</label>
				<input id="firstname" name="firstname" type="text" placeholder="e.g Bart" required>
			</p>


			<p>
				<label for="lastname">Last name</label>
				<input id="lastname" name="lastname" type="text" placeholder="e.g Simpson" required>
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
				<input id="password" name="password" type="Password" placeholder="Your password" required>
			</p>

			<p>
				<label for="password2">Confirm password</label>
				<input id="password2" name="password2" type="Password" placeholder="Your password" required>
			</p>
			
			<button type="submit" name="registerButton">SIGN IN</button>
			
		</form>

	</div>

	
</body>
</html>