<?php $xhe_host = "127.0.0.1:705";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

sleep(2);

// 1
echo "1. Получим x,y окна с фокусом: ";
echo $window->get_focused_window()->get_x()." ".$window->get_focused_window()->get_y();

// конец
echo "\n";

// Quit
$app->quit();
?>