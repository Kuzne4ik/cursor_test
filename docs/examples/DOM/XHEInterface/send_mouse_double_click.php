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
echo "2. Double click on the element with text 'Google': ";
$img=$image->get_by_number(0);
echo $img->send_mouse_double_click($img->get_width()/2,-10);

// end
echo "<hr><br>";

// Quit
$app->quit();
?>