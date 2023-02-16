<?php
require __DIR__ . '/vendor/autoload.php';
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('1.jpg')->resize(800, 640)->insert('logo.png','center')->save();
$img->save("2.jpg",60);
?>