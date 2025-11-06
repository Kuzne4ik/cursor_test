<?php $xhe_host = "127.0.0.1:7010";

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
echo "2. Call browser context menu: ";
echo $element->get_by_name("btnI")->mouse_right_click()."<br>";

// pause
sleep(3);

// 3
echo "3. Press Esc: ";
echo $keyboard->key(27);

// end
echo "<hr><br>";

// Quit
$app->quit();
?>