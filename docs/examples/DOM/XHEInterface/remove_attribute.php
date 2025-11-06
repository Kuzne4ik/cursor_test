<?php $xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br><br>";

// get link with name igvard
$obj=$anchor->get_by_name("igvard");

// 2
echo "2. Get all attributes of element with name 'igvard': <br><br>";
echo $obj->get_all_attributes()."<br><br>";

// 3
echo "3. Remove attribute with name target from element: ";
echo $obj->remove_attribute("target")."<br><br>";

// 4
echo "4. Get all attributes of element with name 'igvard': <br><br>";
echo $obj->get_all_attributes();

// end
echo "<hr><br>";

// Quit
$app->quit();
?>