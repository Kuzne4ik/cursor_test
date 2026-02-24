<?php
$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим текст всех дочерних окон localhost: ";
$xhe = WINDOW::$window->get_all_by_text("localhost")[0];
$childCount = $xhe->get_child_count();
for ($i = 0; $i < $childCount; $i++)
	echo $xhe->get_child_by_number($i)->get_text() . "<br>";

// конец
echo "\n";

// Quit
WINDOW::$app->quit();
?>