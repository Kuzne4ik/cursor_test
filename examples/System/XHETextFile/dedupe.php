<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Уберем дубликаты из файла : ");
echo($textfile->dedupe("test\\test_dedupe.txt","test\\test_dedupe.txt"));

// покажем результаты
$app->shell_execute("","test\\test_dedupe.txt");

// конец
echo "\n";

// Quit
$app->quit();
?>