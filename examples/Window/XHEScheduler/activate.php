<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Активируем нулевую задачу : ";
echo $scheduler->activate(0,true)."<br>";

sleep(2);

// 2 
echo "2. Деактивируем нулевую задачу : ";
echo $scheduler->activate(0,false)."<br>";

// 3 
echo "3. Деактивируем несуществующую задачу : ";
if (!$scheduler->activate(100500,false))
	echo "нет такой задачи<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>