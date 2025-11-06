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
echo "2. By full URL: ";
echo $anchor->get_by_attribute("href",TEST_SITE_URL)->get_y()."<br>";

// 3
echo "3. Navigate to polygon: ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

// 4
echo "4. Get y coordinate (in visible part of page) of link: ";
$anchor->get_by_number(110)->focus();
echo $anchor->get_by_number(110)->get_y(true)."\n";

// 5
echo "5. Get y coordinate of link (on page): ";
echo $anchor->get_by_number(110)->get_y()."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>