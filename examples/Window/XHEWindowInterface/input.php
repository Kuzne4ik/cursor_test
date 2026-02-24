<?php $xhe_host = "127.0.0.1:7013";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1
echo "1. Вставка текста в открытом блокноте : ";
$notebook = WINDOW::$window->get_by_class("Notepad",false,true,true);
$notebook->get_child_by_number(0)->input("abcd\"ef(\"gh ABC\n123) абвгдеёжзийклм\"нопрстуфхцчщы\"ьъэю АБВ");

// Quit
WINDOW::$app->quit();
?>