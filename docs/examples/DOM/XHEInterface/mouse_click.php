<?php $xhe_host = "127.0.0.1:7026";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to google: ";
echo $browser->navigate("http://google.ru")."<br>";

// 2
echo "2. Click on 6th link: ";
echo $anchor->get_by_number(6)->mouse_click(1,1)."\n";

$browser->wait_for();
sleep(3);

// 3
echo "3. Navigate to "  .TEST_SITE_URL . ": ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

// 4
echo "5. Click on link: ";
echo $anchor->get_by_number(110)->mouse_click(2,12)." ";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>