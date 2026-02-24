<?php $xhe_host = "127.0.0.1:7022";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим тексты главных видимых окон с номерами 0,1,2 : ";
$windows_0_1_2=$window->get_all_by_number("0;1;2");
print_r($windows_0_1_2->get_text());

// конец
echo "\n";

// Quit
$app->quit();
?>