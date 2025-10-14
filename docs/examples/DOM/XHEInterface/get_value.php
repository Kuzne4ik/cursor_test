<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "button.html")."<br>";

// 2 
echo "2. Получим value элемента с name равным list : ";
echo $element->get_by_name("btn1")->get_value()."<br>"; 

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>