<?php $xhe_host = "127.0.0.1:7025";

// connect the functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to the test site: ";
echo $browser->navigate(TEST_POLYGON_URL . "listbox.html")."<br>";

// 2
echo "2. Select text 'USA' in the element with the specified number: ";
echo $listbox->get_by_number(1)->select_text("США")."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>