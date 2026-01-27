<?php $xhe_host = "127.0.0.1:7027";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Прочитать заданный файл : <br><br>");
print_r($msgfile->read("test\\test.msg"));

// конец
echo "\n";

sleep(1);

// Quit
$app->quit();
?>