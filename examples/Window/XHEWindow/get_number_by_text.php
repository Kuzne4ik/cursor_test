<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим номер Хумана среди главных и видимых окон : ";
echo $window->get_number_by_text("localhost",false,true,true)."<br>";

// 2 
echo "2. Получим номер Скайпа среди главных и видимых окон : ";
echo $window->get_number_by_text("Skype",false,true,true)."<br>";

// 3 
echo "3. Получим номер Хрома среди главных и видимых окон : ";
echo $window->get_number_by_text("Chrome",false,true,true);

// конец
echo "\n";

// Quit
$app->quit();
?>