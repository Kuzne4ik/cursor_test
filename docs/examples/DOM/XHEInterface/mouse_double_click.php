<?php $xhe_host = "127.0.0.1:7014";

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
echo "2. Double click on element with text 'Google': ";
$img=$image->get_by_id("logo",false);
echo $img->mouse_double_click($img->get_width()+5,5);

// end
echo "<hr><br>";

// Quit
$app->quit();
?>