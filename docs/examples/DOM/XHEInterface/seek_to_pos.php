<?php $xhe_host = "127.0.0.1:7094";

// connect the functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to the test site: ";
echo $browser->navigate(TEST_POLYGON_URL . "textarea.html")."<br>";

// 2
echo "2. Move to position 10: ";
echo $textarea->get_by_number(0)->seek_to_pos(10)."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>