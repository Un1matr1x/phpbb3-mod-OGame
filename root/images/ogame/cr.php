<?php
/**
*
* @package - OGame-Mod
* @copyright (c) Un1matr1x ( http://un1matr1x.de/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

$cr_id = intval($_GET['cr_id']);

if ((strlen($cr_id)) == 1) {
	$size = 11; $x_start = 45;
} elseif ((strlen($cr_id)) == 2) {
	$size = 11; $x_start = 42;
} elseif ((strlen($cr_id)) == 3) {
	$size = 11; $x_start = 39;
} elseif ((strlen($cr_id)) == 4) {
	$size = 10; $x_start = 39;
} elseif ((strlen($cr_id)) == 5) {
	$size = 10; $x_start = 36;
} elseif ((strlen($cr_id)) == 6) {
	$size = 9; $x_start = 35;
} elseif ((strlen($cr_id)) == 7) {
	$size = 8; $x_start = 33;
} elseif ((strlen($cr_id)) >= 8) {
	$size = 7; $x_start = 33;
	$cr_id = (strlen($cr_id) > 8 ) ? substr($cr_id, 0, 3) . '...' . substr($cr_id, -3) : $cr_id;
}


$image = "./cr.png";
$font = './liberationsans-bold.ttf';

$img = imagecreatefrompng($image);
imagealphablending($img, true);
imagesavealpha($img, true);
	
$white = ImageColorAllocate ($img, 255, 255, 255);

imagettftext($img, $size, 0, $x_start, 22, $white, $font, $cr_id);

Imagepng($img);
ImageDestroy ($img);
?>