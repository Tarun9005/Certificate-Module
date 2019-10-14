<?php

$text=$_GET['name'];
$text_2=$_GET['branch'];
$left=$_GET['left'];
$right=$_GET['right'];

if(!isset($_COOKIE['x']))
{
	setcookie('x',578, time()+86400, "/"); // 86400 = 1 day
	$origin_x=578;
}
else
$origin_x=(int)$_COOKIE['x'];

if ($left=="yes") 
{
	$origin_x=$origin_x-5;
	setcookie('x',$origin_x, time()+86400, "/");
}

if ($right=="yes") 
{
	$origin_x=$origin_x+5;
	setcookie('x',$origin_x, time()+86400, "/");
}

$image=imagecreatefromjpeg("ipimage.jpg");

$output="opimage.jpg";

$black=imagecolorallocate($image,40,40,40);

$font_size=30;
$rotation=0;

$origin_y=495;
$font=__DIR__ .'/certi.ttf';


$text1=imagettftext($image,$font_size,$rotation,$origin_x,$origin_y,$black,$font,$text);
$text1=imagettftext($image,20,$rotation,320,535,imagecolorallocate($image,0,0,0),__DIR__ . '/cert2.ttf',$text_2);

//unlink(__DIR__ . '/opimage.jpg');
imagejpeg($image,$output,99);

?>
