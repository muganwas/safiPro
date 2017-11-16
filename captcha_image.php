<?php
header('Content-Type: image/jpeg');
session_start();

$text = $_SESSION['secure'];
$image_width = 110;
$image_height = 50;
$x_drp = 40;
$y_drp = 5;

$font_size = 30;

$font_type = 'ttf/CHILLER.TTF';

$image = imagecreate($image_width, $image_height);

imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);


for($line = 1; $line<30; $line++){
	
	$x1 = rand(1,100);
	$x2 = rand(1,100);
	$y1 = rand(1,100);
	$y2 = rand(1,100);
	
	imageline($image, $x1, $x2, $y1, $y2, $text_color);
	
}

imagettftext($image, $font_size, 0, $y_drp, $x_drp, $text_color, $font_type, $text);
imagejpeg($image);


?>