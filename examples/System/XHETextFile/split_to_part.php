<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Разделим заданный файл : ");
echo($textfile->split_to_part("test\\test_dedupe.txt","test_split",3,60));

// покажем результаты
$app->shell_execute("","test_split");

// конец
echo "\n";

// Quit
$app->quit();
?>