<?php 
    ini_set("error_reporting",E_ALL);
    ini_set("log_errors","1");
    ini_set("error_log","php_errors.txt");
  // Get the font size from cookie. If not found, set the default font size (70%). 
  $font_size = isset($_COOKIE["fontSize_c"]) ? $_COOKIE["fontSize_c"] : "100";
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
			Preferences
		</title>
		
		<link rel="stylesheet" type="text/css" href="../css/theme_<?php echo $theme; ?>.css">
	</head>

	<!-- Set the class of font size --> 
	<body class="font_<?php echo $font_size; ?>">
	
		<div id ="header_panel">
			<h1> The name of the site  <br></h1>
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
			<h3> Preferences </h3>
			<form name="form1"  action="processPreferences.php" method="POST" >
				<br>
				<h3>Theme</h3>
	            <p> Which theme would you like?
		            <select name="theme">
		            	<?php
			            	if($theme==="light"){
			            		echo 
			            		"<option value='light'> Girly</option>
			                	<option value='dark'> Terminal</option>";
			            	}
			                else {
			                	echo
			                	"<option value='dark'> Terminal</option>
			                	<option value='light'> Girly</option>";
			                }
			            ?>
		            </select> 
		        </p> 
		        <h3>Text size</h3>
	            <p> What text size would you like?
		            <select name="fontSize">
		            	<?php
			            	if($font_size=="80"){
			            		echo 
			            		"<option value='80'> 80%</option>
				                <option value='90'> 90%</option>
				                <option value='100'> 100%</option>
				                <option value='110'> 110%</option>
				                <option value='120'> 120%</option>";
			            	}
			            	else if($font_size=="90"){
			            		echo 
			            		"<option value='90'> 90%</option>
				                <option value='80'> 80%</option>
				                <option value='100'> 100%</option>
				                <option value='110'> 110%</option>
				                <option value='120'> 120%</option>";
			            	}
			            	else if($font_size=="100"){
			            		echo 
			            		"<option value='100'> 100%</option>
				                <option value='80'> 80%</option>
				                <option value='90'> 90%</option>
				                <option value='110'> 110%</option>
				                <option value='120'> 120%</option>";
			            	}
			            	else if($font_size=="110"){
			            		echo 
			            		"<option value='110'> 110%</option>
				                <option value='80'> 80%</option>
				                <option value='90'> 90%</option>
				                <option value='100'> 100%</option>
				                <option value='120'> 120%</option>";
			            	}
			            	else if($font_size=="120"){
			            		echo 
			            		"<option value='120'> 120%</option>
				                <option value='80'> 80%</option>
				                <option value='90'> 90%</option>
				                <option value='100'> 100%</option>
				                <option value='110'> 110%</option>";
			            	}
			            ?>
		            </select> 
		        </p> <br>
		        <h3>Navigation Menu Placement</h3>
	            <p> Where do you want to place the menu?
		            <input name="menu" type="radio" value="right" id="rb" <?php if($menu==="right") {echo "checked";}?> > <label for="rb"> right </label>
		            <input name ="menu" type="radio" value="left" id="rl" <?php if($menu==="left") {echo "checked";}?> > <label for="rl" > left </label>
		        </p> <br>


	            <input type="submit" value="Save Preferences"> 
	            <input type="reset" value="reset form"> 
			</form>
		</div>
	</body>
</html>