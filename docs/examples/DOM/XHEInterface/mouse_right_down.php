<?php $xhe_host = "127.0.0.1:7011";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to google: ";
echo $browser->navigate("http://www.google.ru")."<br>";

// 2
echo "2. Call browser context menu with pause before release: ";
echo $element->get_by_name("btnI",false)->mouse_right_down(100,100)." ";
sleep(2);
echo $element->get_by_name("btnI",false)->mouse_right_up(100,100)."<br>";

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