<?php $xhe_host = "127.0.0.1:7026";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Очистим адресную строку: ";
$addres_bar=$window->get_by_text($webpage->get_url(),true,false,true);
$addres_bar->focus();
echo $addres_bar->clear()."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>