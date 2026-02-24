<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим число дочерних окон XHE 1 уровня: ";
echo $window->get_by_text("Human",false)->get_child_count();

// 2
echo "\n2. Получим число дочерних окон XHE : ";
echo $window->get_by_text("Human",false)->get_child_count(true);

// конец
echo "\n";

// Quit
$app->quit();
?>