<?php $xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим координаты инспектора в XHE : ";
$xhe=$window->get_all_by_text("localhost")[0];
$inspector=$xhe->get_child_by_text("Инспектор");
echo $inspector->get_x()." ".$inspector->get_y();

// 2 
echo "2. Закроем инспектор : ";
echo $mouse->click_to_screen(intval($inspector->get_x())+intval($inspector->get_width())-8, intval($inspector->get_y())+8);

// конец
echo "\n";

// Quit
$app->quit();
?>