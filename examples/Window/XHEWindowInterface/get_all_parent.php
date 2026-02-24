<?php
$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим заголовок окона XHE (как список родительских): \n";
print_r ($window->get_by_text("localhost")->get_child_by_text("Панель",false)->get_all_parent()->get_text());

// конец
echo "\n";

// Quit
$app->quit();
?>