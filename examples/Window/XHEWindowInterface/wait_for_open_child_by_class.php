<?php $xhe_host = "127.0.0.1:3039";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Подождем открытия дочернего окна  : ";
$xhe=$window->get_by_text("Human",false);
echo $xhe->wait_for_open_child_by_class("Scintilla",false,true);

// конец
echo "\n";

// Quit
$app->quit();
?>