<?php
//error_reporting(E_ALL);
// call http://localhost/thumbs/thumb.php?src=http://localhost/media/flowing_rock.jpg
require 'thumb_core.php';
// path before http can read (path to the www folder)
define ('BASE_URL','C:\xampp\htdocs');//*/var/www

define ('THUMB_WIDTH', 100);
define ('THUMB_HEIGHT', 100);
define ('THUMB_FORMAT', 'jpg');
define ('THUMB_CROP', 1);


// parameters
$src_file = $_GET['src'];
if (! $src_file) exit;
echo 'hi';
$width = ! isset($_GET['width']) ? 0 : $_GET['width'];
$height = ! isset($_GET['height']) ? 0 : $_GET['height'];
$format = ! isset($_GET['format']) ? THUMB_FORMAT : $_GET['format'];
$crop = ! isset($_GET['crop']) ? THUMB_CROP : $_GET['crop'];
$id = ! isset($_GET['id']) ? 63 : $_GET['id'];

define ('THUMBS_URL', "/thumbs/{$id}/");
if(!is_dir(BASE_URL.THUMBS_URL))
mkdir(BASE_URL.THUMBS_URL, 0777, true);

$thumb_file = thumb ($src_file, $width, $height, $crop, $format);
if (! $thumb_file) exit;

// now redirect to the image file
header("Location: $thumb_file");

?>
