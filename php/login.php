<?php 
    ini_set("error_reporting",E_ALL);
    ini_set("log_errors","1");
    ini_set("error_log","php_errors.txt");
  // Get the font size from cookie. If not found, set the default font size (70%). 
  $font_size = isset($_COOKIE["fontSize_c"]) ? $_COOKIE["fontSize_c"] : "70";
  error_log("font size " . $font_size);
  $menu = isset($_COOKIE["menu_c"]) ? $_COOKIE["menu_c"] : "left";
  error_log("menu " . $menu);
  $theme = isset($_COOKIE["theme_c"]) ? $_COOKIE["theme_c"] : "light";
  error_log("theme " . $theme);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			Log In
		</title>
		<link rel="stylesheet" type="text/css" href="../css/theme_<?php echo $theme; ?>.css">
	</head>


	<!-- Set the class of font size --> 
	<body class="font_<?php echo $font_size; ?>">
	
		<div id ="header_panel">
			<h1> The name of the site <br></h1>
		</div>
		<div id ="navigation_panel_<?php echo $menu; ?>">
			<ul >
				<li><a href="index.php">Home</a></li>
				<li><a href="page_one.php">Page One</a></li>
				<li><a href="page_two.php">Page Two</a></li>
				<li><a href="page_three.php">Page Three</a></li>
				

				<?php
				if(isset($_COOKIE["logged_in"])) { //<--! DISPLAY ONLY IF USER IS LOGGED IN -->
				    echo "<li><a href='preferences.php'>Preferences</a></li>";
				    
				    echo "<li><a href='logout.php'>Log Out</a></li>";
				    
				}
				else {	//<!-- DISPLAY ONLY IF USER IS NOT LOGGED -->
				    echo "<li><a href ='login.php'>Log In</a></li>";
				}
				?>

			</ul>

		</div>
		<div id ="content_box">
			<h3> Log In </h3>
			<form name="form1"  action="../php/processLogin.php" method="POST" >
				<br>
	            Username <input type="text" name="uname"> <br>
	            Password <input type="password" name="pwd"> <br><br>
	            
	            <input type="submit" value="Log in"> 
	            
			</form>
		</div>
	</body>
</html>