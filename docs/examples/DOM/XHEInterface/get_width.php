<?php $xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2
echo "2. Get width of element with href equal to " . TEST_SITE_URL . ": ";
echo $element->get_by_attribute("href",TEST_SITE_URL)->get_width()."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>