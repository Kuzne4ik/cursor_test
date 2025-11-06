<?php $xhe_host = "127.0.0.1:3031";

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
echo "2. Press the mouse with a pause before releasing on the 'I'm Feeling Lucky' button: ";
echo $button->get_by_number(3)->send_mouse_left_down(5,5)." ";
sleep(3);
echo $button->get_by_number(3)->send_mouse_left_up(5,5)."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>