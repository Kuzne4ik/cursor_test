<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "image.html")."<br>";

// 2 
echo "2. Получить tag рисунка по его имени : ";
echo $image->get_by_name("screen1")->get_tag()."<br>";

// 3 
echo "3. Получить tag рисунка и его размеры по его имени : ";
$obj=$image->get_by_name("screen1");
echo $obj->get_tag()." ".$obj->get_width()." ".$obj->get_height()."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>