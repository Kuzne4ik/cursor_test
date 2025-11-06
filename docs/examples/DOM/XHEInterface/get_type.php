<?php $xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate(TEST_POLYGON_URL . "input.html")."<br>";

// 2
echo "2. Get type of input by its name: ";
echo $input->get_by_name("Name")->get_type()."<br>";

// 3
echo "3. Get type of input in frame 0 and its dimensions by its name: ";
$obj=$input->get_by_name("Name",0);
echo $obj->get_type()." ".$obj->get_width()." ".$obj->get_height()."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>