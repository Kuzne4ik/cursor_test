<?php $xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// set browser height
$browser->set_height(200);

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2
echo "2. Scroll to visibility area (bottom) element with specified id: ";
echo $anchor->get_by_id("list")->scroll_to_view(0)."<br>";

sleep(2);

// 3
echo "3. Scroll to visibility area (top) element with specified id: ";
echo $anchor->get_by_id("list")->scroll_to_view(1)."<br>";

sleep(2);

// 3
echo "3. Smoothly scroll to visibility area (center) element with specified id: ";
echo $anchor->get_by_id("list")->scroll_to_view(2,true)."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>