<?php
/**
*
* @package - OGame-Mod
* @copyright (c) Un1matr1x ( http://un1matr1x.de/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

//phpBB3-Intitialisierung
define('IN_PHPBB', true);
$phpbb_root_path = './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

$cr_id = request_var('cr_id', 0);

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


$image = $phpbb_root_path . 'images/ogame/cr.png';
$font = $phpbb_root_path . 'images/ogame/liberationsans-bold.ttf';

$img = ImageCreateFromPNG($image);
ImageAlphaBlending($img, true);
ImageSaveAlpha($img, true);
	
$white = ImageColorAllocate ($img, 255, 255, 255);

ImageTTFText($img, $size, 0, $x_start, 22, $white, $font, $cr_id);

	// send new image to browser
	header("Content-Type: image/png");
	header("Expires: Mon, 01 Jan 1997 01:00:00 GMT");
	header("Last-Modified: Mon, 26 Jul 1997 01:00:00 GMT");

Imagepng($img);
ImageDestroy ($img);
?>