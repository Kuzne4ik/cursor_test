<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2 
echo "2. Установим фокус на элементе с заданным id : ";
echo $anchor->get_by_id("id_onclick")->focus()."<br>";

sleep(4);

// 3 
echo "3. Установим фокус на элементе с заданным именем  и получим его размеры: ";
$obj=$anchor->get_by_name("igvard",0);
echo $obj->focus()." ".$obj->get_width()." ".$obj->get_height()."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>