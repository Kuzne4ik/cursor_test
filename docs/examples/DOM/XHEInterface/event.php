<?php
$xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "input.html")."<br>";

// 2 
echo "2. Пошлем событие onclick элементу с именем 'Name1': ";
echo $input->get_by_name("Name1")->event("onclick")."<br>";

// 3 
echo "3. Пошлем событие onclick элементу с именем Name1 в нулевом фрейме и получим его размеры: ";
$obj=$input->get_by_name("Name1",0);
echo $obj->event("onclick")." ".$obj->get_width()." ".$obj->get_height()."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>