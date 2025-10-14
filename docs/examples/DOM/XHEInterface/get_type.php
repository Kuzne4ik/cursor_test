<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "input.html")."<br>";

// 2 
echo "2. Получить тип ввода по его имени: ";
echo $input->get_by_name("Name")->get_type()."<br>";

// 3 
echo "3. Получить тип ввода в 0 фрейме и его размеры по его имени: ";
$obj=$input->get_by_name("Name",0);
echo $obj->get_type()." ".$obj->get_width()." ".$obj->get_height()."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>