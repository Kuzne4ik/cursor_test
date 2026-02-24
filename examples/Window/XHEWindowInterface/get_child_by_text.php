<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим координаты инспектора окон в XHE : ";
$xhe=$window->get_by_text("Human",false);
$inspector=$xhe->get_child_by_text("Инспектор Окон",true,true);
echo $inspector->get_x()." ".$inspector->get_y();

// 2 
echo "\n2. Закроем инспектор : ";
echo $mouse->click_to_screen($inspector->get_x()+$inspector->get_width()-8,$inspector->get_y()-8);

// конец
echo "\n";

// Quit
$app->quit();
?>