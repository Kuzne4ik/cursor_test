<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим текст окна программы : ";
$xhe=$window->get_by_text("Studio");
echo $xhe->get_text()."<br>";

// 2 
echo "2. Получим тексты окон по thread_id : ";
print_r($window->get_all_by_thread_id($xhe->get_thread_id(),false,false)->get_text());

// конец
echo "\n";

// Quit
$app->quit();
?>