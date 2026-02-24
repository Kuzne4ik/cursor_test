<?php
$xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим координаты Левой Панели в localhost: ";
$xhe = WINDOW::$window->get_all_by_text("localhost")[0];
$left_pane=$xhe->get_child_by_class("XTPDockingPaneTabbedContainer");
echo $left_pane->get_x()." ".$left_pane->get_y()."<br>";

// 2 
echo "2. Спрячем левую панель: ";
echo SYSTEM::$mouse->click_to_screen(
    intval($left_pane->get_x()) + intval($left_pane->get_width()) - 28,
    intval($left_pane->get_y()) + 8);

// конец
echo "\n";

// Quit
WINDOW::$app->quit();
?>