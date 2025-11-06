<?php $xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// for speed
$browser->set_wait_params(5,1);

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2
echo "2. Remove 0 link: ";
echo $anchor->get_by_number(0)->remove()."\n";

// 3
echo "3. Remove 0 frame: ";
echo $frame->get_by_number(0)->remove();

// end
echo "<hr><br>";

// Quit
$app->quit();
?>