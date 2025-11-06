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
echo "2. Get x coordinate of link by full inner text: ";
echo $anchor->get_by_inner_text("список всех",false)->get_x()."<br>";

// 3
echo "3. Navigate to polygon: ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

// 4
echo "4. Get x coordinate (in visible part of page) of link: ";
$anchor->get_by_number(110)->focus();
echo $anchor->get_by_number(110)->get_x(true)."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>