<?php $xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

sleep(3);
// 2
echo "2. Scroll divs: ";
echo $body->get_by_number(0)->scroll("pageDown")." <br>";
echo $body->get_by_number(0)->scroll("pageDown")." <br>";
echo $body->get_by_number(0)->scroll("pageDown")." <br>";
sleep(3);
echo $body->get_by_number(0)->scroll("down")." <br>";
echo $body->get_by_number(0)->scroll("down")." <br>";
echo $body->get_by_number(0)->scroll("down")." <br>";
sleep(3);
echo $body->get_by_number(0)->scroll("up")." <br>";
echo $body->get_by_number(0)->scroll("up")." <br>";
echo $body->get_by_number(0)->scroll("up")." <br>";
sleep(3);
echo $body->get_by_number(0)->scroll("pageUp")." <br>";
echo $body->get_by_number(0)->scroll("pageUp")." <br>";
echo $body->get_by_number(0)->scroll("pageUp")." <br>";
sleep(3);


// end
echo "<hr><br>";

// Quit
$app->quit();
?>