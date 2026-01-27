<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Запишем строку \"127.0.0.1\", в файл  TestWrite.txt в каталоге скрипта : ");
echo($textfile->write_file("test\\test_write.txt","127.0.0.1",60));

// покажем результаты
$app->shell_execute("","test\\test_write.txt");

// конец
echo "\n";

// Quit
$app->quit();
?>