<?php $xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate(TEST_POLYGON_URL . "image.html")."<br>";

// 2
echo "2. Get tag of image by its name: ";
echo $image->get_by_name("screen1")->get_tag()."<br>";

// 3
echo "3. Get tag of image and its dimensions by its name: ";
$obj=$image->get_by_name("screen1");
echo $obj->get_tag()." ".$obj->get_width()." ".$obj->get_height()."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>