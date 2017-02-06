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
			Page 3
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
			<h3>Page Three</h3>
			<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
		</div>
	</body>
</html>