<?php $xhe_host = "127.0.0.1:7011";

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
echo "2. Press mouse with pause before release on 'I'm Feeling Lucky' button: ";
echo $element->get_by_name("btnI")->mouse_left_down(1,1)." ";
sleep(3);
echo $element->get_by_name("btnI")->mouse_left_up(1,1)."<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>