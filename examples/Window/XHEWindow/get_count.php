<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим число видимых главных окон : ";
echo $window->get_count(true,true)."<br>";

// 2 
echo "2. Получим число видимых окон : ";
echo $window->get_count(true,false)."<br>";

// 3 
echo "3. Получим число главных окон : ";
echo $window->get_count(false,true)."<br>";

// 4 
echo "4. Получим число всех окон : ";
echo $window->get_count(false,false)."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>