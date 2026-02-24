<?php
$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Закроем Блокнот: ";
echo WINDOW::$window->get_all_by_text("Блокнот")[0]->close()."<br>";

// конец
echo "\n";

// Quit
WINDOW::$app->quit();
?>