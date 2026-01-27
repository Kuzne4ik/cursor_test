<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Уберём из исходного файла содержимое другого файла и запишем результат в файл : ");
echo($textfile->exclude_strings_file_from_file("test\\test_exclude_src.txt","test\\test_exclude_exclude.txt","test\\test_exclude_results.txt",60));

// покажем результаты
$app->shell_execute("","test\\test_exclude_results.txt");

// конец
echo "\n";

// Quit
$app->quit();
?>