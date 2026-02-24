<?php $xhe_host = "127.0.0.1:7026";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Вставка текста в открытом блокноте : ";
$notebook=$window->get_by_text("Блокнот",false,true,true)->get_child_by_number(0);
$notebook->focus();
$notebook->paste("text1\r\n");
$notebook->paste("text2");

// конец
echo "\n";

// Quit
$app->quit();
?>