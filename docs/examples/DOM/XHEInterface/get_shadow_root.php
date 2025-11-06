<?php $xhe_host = "127.0.0.1:7022";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate("https://mdn.github.io/web-components-examples/life-cycle-callbacks/")."<br>";
$btn->click_by_number(0);

// 2
echo "2. Get tag of Shadow Root element: ";
$obj = $element->get_all_by_tag("CUSTOM-SQUARE")->get(0);
echo $obj->get_shadow_root()->get_tag();

// end
echo "<hr><br>";

// Quit
$app->quit();
?>