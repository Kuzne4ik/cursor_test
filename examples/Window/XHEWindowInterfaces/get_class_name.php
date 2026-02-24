<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим класс главного видимого окна содержащего название Skype : ";
$skype=$window->get_all_by_text("Skype")[0];
echo $skype->get_class_name()."<br>";

// 2 
echo "2. Получим класс главного видимого окна c номером 0 : ";
echo $window->get_all_by_number(0)[0]->get_class_name()."<br>";

// 3 
echo "3. Получим класс окна c номером 100 : ";
echo $window->get_all_by_number(0,false,false)[0]->get_class_name()."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>