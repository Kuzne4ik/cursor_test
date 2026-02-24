<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Спрячем инспектор мышкой : ";
$inspector=$window->get_all_by_text("localhost")[0]->get_child_by_text("Инспектор");
echo $inspector->mouse_click($inspector->get_width()-28,8);

// конец
echo "\n";

// Quit
$app->quit();
?>