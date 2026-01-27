<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Рандомизировать заданный файл в файл результатов : ");
echo($textfile->randomize_to("test\\test_randomize.txt","test\\test_randomized.txt",60)."<br>");

// показать результаты
$app->shell_execute("","test\\test_randomized.txt");

// конец
echo "\n";

// Quit
$app->quit();
?>