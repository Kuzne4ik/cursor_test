<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Активировать все задачи : ";
echo $scheduler->activate_all(true)."<br>";

sleep(2);

// 2 
echo "2. Деактивировать все задачи : ";
echo $scheduler->activate_all(false)."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>