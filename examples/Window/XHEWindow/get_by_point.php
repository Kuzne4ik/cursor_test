<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим текст окна по точке 10,10 : ";
echo $window->get_by_point(10,10)->get_text()."<br>";


// 2 
echo "2. Получим текст окна по точке 90,90 : ";
echo $window->get_by_point(90,90)->get_text()."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>