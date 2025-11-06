<?php $xhe_host = "127.0.0.1:5005";

// connect the functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to the test site: ";
echo $browser->navigate(TEST_POLYGON_URL . "input.html")."<br>";

// 2
echo "2. Set value for the element with name equal to txt1: ";
echo $input->get_by_number(3)->set_value("NEW VALUE")."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>