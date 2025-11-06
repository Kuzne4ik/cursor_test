<?php $xhe_host = "127.0.0.1:7010";

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

echo $anchor->get_by_name("onclick", 0)->meta_click(false)."<br>";



// end
echo "<hr><br>";

// Quit
$app->quit();
?>