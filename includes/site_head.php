<?php require 'connection/connection.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
	<link href="favicon.png" rel="icon"/>
	<title><?php echo $site_title.' '.$page_name; ?></title>

	<!-- Loading third party fonts-->
	<!----><script src="https://maps.google.com/maps/api/js?key=AIzaSyDRjMv4oX0YASKAR6liplRZY_wGjPWwfgU&sensor=false&amp;language=en"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|" rel="stylesheet" type="text/css"> 
	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/subscription.js"></script>
	
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>

	<!-- Loading main css file -->
	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
	<script src="js/ie-support/html5.js"></script>
	<script src="js/ie-support/respond.js"></script>
	<![endif]-->

</head>
<body onload="proclaim();">
<div id="site-content">
<?php include 'includes/site_header.php'?>
