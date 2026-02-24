<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим число дочерних окон эмулятора (0 видимого и главного окна) : ";
echo $window->get_child_count_by_number(0,true,true)."<br>";

// 2 
echo "2. Получим число дочерних окон 4 видимого окна : ";
echo $window->get_child_count_by_number(4,true,false);

// конец
echo "\n";

// Quit
$app->quit();
?>