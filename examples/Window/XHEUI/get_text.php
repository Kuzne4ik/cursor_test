<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим значение : ";
$notepad = $window->get_by_class("Notepad",true,false)->get_ui_element()->get_child();
echo($notepad->input("12345"));
echo($notepad->input(" 5678",false));
echo($notepad->get_text());

// конец
echo "\n";

// Quit
$app->quit();
?>