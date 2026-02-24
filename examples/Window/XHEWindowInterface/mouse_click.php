<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Спрячем инспектор мышкой : ";
$inspector=$window->get_by_text("localhost")->get_child_by_text("Инспектор",true,true)->get_ui();
echo $inspector->mouse_click(0,0);

// конец
echo "\n";

// Quit
$app->quit();
?>