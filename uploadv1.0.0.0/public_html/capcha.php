<?php
// This code was made by:
// http://www.hackforums.net/member.php?action=profile&uid=1433880
$ghtrhtrhhbbbbbby=5;
if (!isset($_SESSION)) {session_start();}
if (!isset($_SESSION['captcha'])) {$answer = $_SESSION['captcha'] = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $ghtrhtrhhbbbbbby);}else{$answer = $_SESSION['captcha'];}
$width = 160;$height = 46;$image = imagecreate($width, $height);$bg_rgb = rand(160, 255);
$background_color = imagecolorallocate($image, $bg_rgb, $bg_rgb, $bg_rgb);imagefill($image, 0, 0, $background_color);$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
$font = rand(1, 5);$text_width = imagefontwidth($font) * $ghtrhtrhhbbbbbby;$text_height = imagefontheight($font);
$text_image = imagecreate($text_width, $text_height);imagefill($text_image, 0, 0, imagecolorallocate($text_image, $bg_rgb, $bg_rgb, $bg_rgb)); // fill background
for ($i = 0; $i < strlen($_SESSION['captcha']); $i++) {$char = substr($_SESSION['captcha'], $i, 1);imagechar($text_image, $font, imagefontwidth($font) * $i, 0, $char, imagecolorallocate($text_image, rand(0, 255), rand(0, 255), rand(0, 255)));}
imagecopyresized($image, $text_image, 0, 0, 0, 0, $width, $height, $text_width, $text_height);$line_count = rand(1, 10);
for ($i = 0; $i < $line_count; $i++) { $color = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));imageline($image, rand(0, $width), rand(0, $height), rand(0, $width), rand(0, $height), $color); }
for ($x = 0; $x < $width; $x++) {for ($y = 0; $y < $height; $y++) {if (rand(0, 20) == 0) {imagesetpixel($image, $x, $y, $black);}}}
header("Content-Type: image/png");imagepng($image);imagedestroy($image);
?>