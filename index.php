<?php
include("includes/config.php");

//session_destroy(); :LOGOUT MANUALLY

    if(isset($_SESSION['userLoggedIn'])){
        $userLoggedIn = $_SESSION['userLoggedIn'];
    }
    else{
        header("Location: register.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome To Slotify!</title>
</head>
<body>
	Hello!

</body>
</html>