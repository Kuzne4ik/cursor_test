<?php $xhe_host = "127.0.0.1:7014";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

// 2
echo "2. Is element with number 0 visible: ";
echo $anchor->get_by_number(0)->is_view_now()."<br>";

// 3
echo "3. Is anchor 100 visible: ";
if (!$anchor->get_by_number(100)->is_view_now())
	echo "not visible<br>";

// 4
echo "4	. Show number 100: ";
echo $anchor->get_by_number(100)->ensure_visible()."\n";
	
// 5
echo "5. Is anchor 100 visible: ";
echo $anchor->get_by_number(100)->is_view_now();

// end
echo "<hr><br>";

// Quit
$app->quit();
?>