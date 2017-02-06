<?php
	$username = $_POST["uname"];
	$password = $_POST["pwd"];

	if($username === "test" && $password === "alpha")
	{
	    setcookie("logged_in", "true",0,"/");
	    header("location: ./../php/index.php" );
		
	}
	else
	{
	    header("location: ./../php/login.php" );
	}
?>