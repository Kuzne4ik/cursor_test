<?php
$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим текст главного видимого окна содержащего название Блокнот: ";
$all = WINDOW::$window->get_all();
echo $all->get_by_text("Блокнот")->get_text();

// конец
echo "\n";

// Quit
WINDOW::$app->quit();
?>