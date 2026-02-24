<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим текст главного видимого окна содержащего название Skype : ";
$skype=$window->get_by_text("Skype");
echo $skype->get_text()."<br>";

// 2 
echo "2. Получим текст главного видимого окна c номером 0 : ";
echo $window->get_by_number(0)->get_text()."<br>";

// 3 
echo "3. Получим текст окна c номером 100 : ";
echo $window->get_by_number(0,false,false)->get_text()."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>