<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим текст 0 главного видимого окна (Хуман не в трее) : ";
echo $window->get_text_by_number(0,true,true)."<br>";

// 2 
echo "2. Получим текст 1 главного видимого окна (следующее поcле эмулятора окно по alt+tab) : ";
echo $window->get_text_by_number(1,true,true)."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>