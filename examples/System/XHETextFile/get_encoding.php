<?php $xhe_host = "127.0.0.1:7040";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Получим кодировку файла : ");
echo($textfile->get_encoding("test\\test_dedupe.txt"));

// конец
echo "\n";

// Quit
$app->quit();
?>