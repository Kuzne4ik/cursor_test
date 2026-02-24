<?php
$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим текст первого главного видимого окна в точке 10,10: ";
$all = WINDOW::$window->get_all();
echo $all->get_by_point(10,10)->get_text();

// конец
echo "\n";

// Quit
WINDOW::$app->quit();
?>