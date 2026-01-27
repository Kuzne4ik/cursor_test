<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Перевернуть порядок строк в заданом файле : ");
echo($textfile->revert_strings_file("test\\test_count.txt","test\\test_revert.txt",60));

// рузультат
$app->shell_execute("","test\\test_revert.txt");

// конец
echo "\n";

// Quit
$app->quit();
?>