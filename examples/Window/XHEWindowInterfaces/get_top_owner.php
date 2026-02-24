<?php
$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим координаты 'Левой Панели' в приложении: ";
$xhe=$window->get_all_by_text("localhost")[0];
$left_pane=$xhe->get_child_by_class("XTPDockingPaneTabbedContainer");
echo $left_pane->get_x()." ".$left_pane->get_y() . "\n";

// 2 
echo "2. Получим текст верхнего окна владельца для 'Левой панели': ";
echo $left_pane->get_top_owner()->get_text();

// конец
echo "\n";

// Quit
$app->quit();
?>