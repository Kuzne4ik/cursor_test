<?php $xhe_host = "127.0.0.1:7014";

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
echo "2. Get search string: ";
$obj=$input->get_by_number(0);
echo $obj->inner_number."<br>";

// 3
echo "3. Press a key: ";
echo $obj->key_down("a")."  +  ";
echo $obj->key_up("a");

// end
echo "<hr><br>";

// Quit
$app->quit();
?>