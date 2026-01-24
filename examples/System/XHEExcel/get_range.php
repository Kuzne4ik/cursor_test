<?php
$xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excel->".basename (__FILE__)."</font>\n";

$path = "test/test.xlsx";
$excel->kill();

// 1
echo("1. Получить содержимое диапазона как массив '0!A1:C3': ");
print_r($excel->get_range($path, 0, "A1", "C3"));

// 2
echo("\n2. Получить содержимое диапазона как массив '0!A1:A10': ");
print_r($excel->get_range($path, 0, "A1", "A10"));


// конец
 echo "\n";

// Quit
$app->quit();
?>