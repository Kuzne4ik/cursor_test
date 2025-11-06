<?php $xhe_host = "127.0.0.1:5005";

// connect the functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to the test site: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2
echo "2. Set html text for the element with name equal to igvard: ";
echo $anchor->get_by_attribute("name","igvard",true)->set_inner_html("<b>НОВЫЙ HTML</b>")."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>