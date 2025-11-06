<?php
$xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// to make it faster
$browser->set_wait_params(5,1);

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html") . "\n";

// 2
echo "2. Get tag and number of next: ";
$obj_a = $anchor->get_by_name("carnote");
$obj_p = $obj_a->get_next();
echo $obj_p->get_tag()." ".$obj_p->get_number("element") . "\n";

// 3
echo "3. Get tag and number of previous: ";
$obj_p = $obj_a->get_prev();
echo $obj_p->get_tag() . " " . $obj_p->get_number("element") . "\n";

// 4
echo "4. Get tag and number of current: ";
echo $obj_a->get_tag() . " " . $obj_a->get_number("element") . "\n";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>