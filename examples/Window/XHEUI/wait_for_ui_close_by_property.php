<?php $xhe_host = "127.0.0.1:3039";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Дождемся закрытия меню файл : ";
$xhe=$window->get_by_text("localhost")->get_ui_element();
$mfile=$xhe->get_by_property("Name","Файл");
$mfile->invoke();
echo($mfile->wait_for_ui_close_by_property("Name","Печать"));

// конец
echo "\n";

// Quit
$app->quit();
?>