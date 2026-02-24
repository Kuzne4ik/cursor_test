<?php $xhe_host = "127.0.0.1:7022";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим класс окон , класс которых содержат букву a : ";
print_r($window->get_all_by_class("a")->get_class_name());

// конец
echo "\n";

// Quit
$app->quit();
?>