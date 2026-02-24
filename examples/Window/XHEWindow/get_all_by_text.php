<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим тексты главных видимых окон с содержащие букву a : ";
$windows_textA=$window->get_all_by_text("a");
print_r($windows_textA->get_text());

// конец
echo "\n";

// Quit
$app->quit();
?>