<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Прочитать файл заданный файл : <br><br>");
echo($textfile->read_file("test\\test_count.txt",60));			

// конец
echo "\n";

// Quit
$app->quit();
?>