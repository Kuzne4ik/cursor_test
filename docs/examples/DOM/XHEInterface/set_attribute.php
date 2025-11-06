<?php $xhe_host = "127.0.0.1:7094";

// connect the functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to the test site: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// get the element
$obj=$element->get_by_inner_text("onclick",false);

// 2
echo "2. Get all attributes of the element with the name 'onclick': <br><br>";
echo $obj->get_all_attributes_values()."<br><br>";

// 3
echo "3. Set the attribute with name target=12345 for the element with inner text 'onclick link': ";
echo $obj->set_attribute("target","12345")."<br><br>";

// 5
echo "5. Get all attributes of the element with the name 'onclick': <br><br>";
echo $obj->get_all_attributes_values("onclick")."<br><br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>