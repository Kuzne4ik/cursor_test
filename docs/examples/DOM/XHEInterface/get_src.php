<?php 
$xhe_host = "127.0.0.1:7010";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "\n1. Navigate to polygon: ";
echo $browser->navigate(TEST_POLYGON_URL . "image.html");

// 2
echo "\n2. Get src of image by its name: ";
echo $image->get_by_name("screen1")->get_src();

// Quit
$app->quit();
?>