<?php $xhe_host = "127.0.0.1:5005";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем в гугл : ";
echo $browser->navigate("http://www.google.ru")."<br>";

// 2 
echo "2. Переместим мышь на About' : ";
$obj = $anchor->get_by_inner_text("About");
echo $obj->mouse_move(10,10)." ";
sleep(4);
echo $obj->send_touch(0,1,10,10)." ";
echo $obj->send_touch(0,0,10,10)."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>