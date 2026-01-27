<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Получим папку, где лежит файл : ");
echo($textfile->get_file_folder("C:\\Windows\\hh.exe",10));

// конец
echo "\n";

// Quit
$app->quit();
?>