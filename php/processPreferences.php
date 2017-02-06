<?php
	
    $theme_css = $_POST["theme"];
	$fontsize_css = $_POST["fontSize"];
	$menu_css = $_POST["menu"];
	setcookie("theme_c", $theme_css, 365*24*60*60+time());
	setcookie("fontSize_c", $fontsize_css, 365*24*60*60+time());
	setcookie("menu_c", $menu_css, 365*24*60*60+time());
	header("location: ./../php/index.php" );
	
?>