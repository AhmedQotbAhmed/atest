<?php

	include 'connect.php';

	// Routes

	$tpl 	= 'includes/templates/'; // Template Directory
	$langs 	= 'includes/languages/'; // Language Directory
	$func	= 'includes/functions/'; // Functions Directory
	$css 	= 'layout/css/'; // Css Directory
	$js 	= 'layout/js/'; // Js Directory

	// Include The Important Files

	include $func.'functions.php';
	include_once $langs.'english.php';
	include $tpl.'header.php';

	// Include Navbar On All Pages Expect The One With $noNavbar Vairable

	if (!isset($noNavbar)) { include $tpl.'navbar.php'; }
	

	