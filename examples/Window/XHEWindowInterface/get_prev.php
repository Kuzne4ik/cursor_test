<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим координаты Левой Панели в XHE : ";
$xhe=$window->get_by_text("Human");
echo $xhe->get_text();
$left_pane=$xhe->get_child_by_class("WindowsForms10.Scintilla",false);
echo $left_pane->get_x()." ".$left_pane->get_y()."<br>";

// 2 
echo "2. Получим текст окна предыдущего перед Левой панелью : ";
echo $left_pane->get_prev()->get_text();

// конец
echo "\n";

// Quit
$app->quit();
?>