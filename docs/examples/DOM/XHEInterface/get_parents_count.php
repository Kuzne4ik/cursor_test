<?php $xhe_host = "127.0.0.1:3035";

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
echo "2. Get the count of parent elements: ";
$obj_a=$anchor->get_by_name("seonote");
echo $obj_a->get_parents_count();

// end
echo "<hr><br>";

// Quit
$app->quit();
?>