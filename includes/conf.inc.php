<?php
ob_start();
if(session_status() == PHP_SESSION_NONE)
	session_start();
?>
<?php

//setcookie($user_id);



$script_loc = $_SERVER['SCRIPT_NAME'];


if(!empty($_SERVER['HTTP_CLIENT_IP'])){
	
	$ip_address = $_SERVER['HTTP_CLIENT_IP'];
	
}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	
	$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
	
}else{
	
	$ip_address = $_SERVER['REMOTE_ADDR'];
}
$root_folder = '/safiPro/';
$image_ex1= '.jpg';
$image_ex2= '.png';
$image_ex3= '.gif';
$logo_name = 'safipro-logo.jpg';
$image_loc1 = $root_folder.'images/';
$avator_loc = $root_folder.'images/avators/';
$search = $root_folder.'search_results';
$article = $root_folder.'article_display.php?id=';
$hb_image_loc = $root_folder.'images/header_images/';
$slider_images = $root_folder.'images/slider_images/';
$offer_images = $root_folder.'images/offers/';
$form_folder = $root_folder.'downloadables/';
$blog_images = $root_folder.'images/blog/';
$site_name = 'Safi Pro Investments';
$site_title = 'Safi Pro Investments |';
$current_page_location = $_SERVER['SCRIPT_NAME'];
$current_page_array = explode('/',$current_page_location);
$current_page = end($current_page_array);
$page_array = explode('.', $current_page);
$page_name_temp = $page_array[0];

if(strtolower($page_name_temp=='index')){
	
	$page_name = 'Home';
	
}else{
	
	$page_name = ucfirst($page_name_temp);
}

?>