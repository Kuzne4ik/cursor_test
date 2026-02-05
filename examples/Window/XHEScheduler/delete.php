<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Удалим первую задачу (нумерацию с нуля) : ";
echo $scheduler->delete(1)."<br>";

// 2 
echo "2. Удалим несуществующую задачу (нумерацию с нуля) : ";
if (!$scheduler->delete(10))
	echo "нет такой задачи<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>