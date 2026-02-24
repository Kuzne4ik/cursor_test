<?php $xhe_host = "127.0.0.1:7026";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим координаты Левой Панели в XHE : ";
$xhe=$window->get_by_text("Human",false);
$left_pane=$xhe->get_child_by_class("Scintilla",false,true);
echo $left_pane->get_x()." ".$left_pane->get_y()."<br>";

// 2 
echo "2. Спрячем левую панель : ";
echo $mouse->click_to_screen($left_pane->get_x()+$left_pane->get_width()-28,$left_pane->get_y()-55);

// конец
echo "\n";

// Quit
$app->quit();
?>