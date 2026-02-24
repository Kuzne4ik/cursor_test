<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1
echo "1. Получим класс первого главного видимого окна , класс которого содержат букву a : ";
echo $window->get_by_class("a")->get_class_name();

// конец
echo "\n";

// Quit
$app->quit();
?>