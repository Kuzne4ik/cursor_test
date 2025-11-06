<?php $xhe_host = "127.0.0.1:7014";

// connect the functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to Google: ";
echo $browser->navigate("http://google.ru")."<br>";

// 2
echo "2. Call the browser context menu with a pause before release: ";
echo $element->get_by_name("btnI")->send_mouse_right_down(1,1)." ";
sleep(2);
echo $element->get_by_name("btnI")->send_mouse_right_up(1,1)."<br>";

// pause
sleep(3);

// 3
echo "3. Press Esc: ";
echo $keyboard->send_key(27);

// end
echo "<hr><br>";

// Quit
$app->quit();
?>