<?php
session_start();

// Ensure no previous output has occurred
ob_clean();

header('Content-type: image/png');

$captcha_code = $_SESSION['captcha_code'];

// Create an image with a white background
$image = imagecreatetruecolor(120, 40);
imagefilledrectangle($image, 0, 0, 120, 40, imagecolorallocate($image, 255, 255, 255));

// Set the font color to black
$text_color = imagecolorallocate($image, 0, 0, 0);

// Use a font file (adjust the path if needed)
$font_path = 'Roboto-Bold.ttf';
$font_size = 18;

// Add the captcha code to the image
imagettftext($image, $font_size, 0, 10, 30, $text_color, $font_path, $captcha_code);

// Output the image as PNG
imagepng($image);

// Free up memory
imagedestroy($image);
?>
