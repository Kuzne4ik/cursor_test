<?php $xhe_host = "127.0.0.1:7040";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Отсортировать заданный файл : ");
echo($textfile->sort("test\\test_dedupe.txt","test\\test_sorted.txt",60));

// покажем результаты
$app->shell_execute("","test\\test_sorted.txt");

// конец
echo "\n";

// Quit
$app->quit();
?>