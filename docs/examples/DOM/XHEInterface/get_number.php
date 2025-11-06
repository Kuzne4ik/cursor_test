<?php $xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate(TEST_POLYGON_URL . "image.html") . "\n";

// 2
echo "2. Get element number by its src: ";
echo $image->get_by_attribute("src", TEST_SCREENSHOTS_URL . "01.jpg",true)->get_number() . "\n";

// 3
echo "3. Get image number by its src: ";
echo $image->get_by_attribute("src","02.jpg",false)->get_number("image") . "\n";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>