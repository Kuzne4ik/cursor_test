<?php $xhe_host = "127.0.0.1:7010";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>keyboard->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to yandex: ";
echo $browser->navigate("http://ya.ru")."<br>";

// 2
echo "2. Get search string as element: ";
$obj=$input->get_by_number(0);
echo $obj->inner_number."<br>";

// 3
echo "3. Press key s (code 83): ";
$keyboard->set_current_language("en");
$app->set_foreground_window();
echo $obj->focus()." ".$obj->key(83);

// end
echo "<hr><br>";

// Quit
$app->quit();
?>