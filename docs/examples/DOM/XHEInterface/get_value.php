<?php $xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate(TEST_POLYGON_URL . "button.html")."<br>";

// 2
echo "2. Get value of element with name equal to btn1: ";
echo $element->get_by_name("btn1")->get_value()."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>