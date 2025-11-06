<?php $xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate(TEST_POLYGON_URL . "btn.html")."<br>";

// 2
echo "2. Is button with this name disabled: ";
echo $btn->get_by_name("add_comment_button")->is_disabled()."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>