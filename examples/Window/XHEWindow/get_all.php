<?php $xhe_host = "127.0.0.1:7022";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим тексты главных видимых окон : ";
$windows=$window->get_all();
print_r($windows->get_text());

// 2 
echo "2. Получим тексты главных окон : ";
$windows=$window->get_all(true,false);
print_r($windows->get_text());

// 3 
echo "3. Получим тексты всех окон : ";
$windows=$window->get_all(false,false);
print_r($windows->get_text());

// конец
echo "\n";

// Quit
$app->quit();
?>