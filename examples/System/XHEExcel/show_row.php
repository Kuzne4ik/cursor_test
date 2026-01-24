<?php $xhe_host = "127.0.0.1:7023";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();
$path="test\\test.xlsx";

// 1 
echo("1. Спрятана ли 1 строка: ");
print_r($excel->is_row_hidden($path,0,1));

// 2
echo("\n2. Спрятать 1 строку: ");
print_r($excel->show_row($path,0,1,false));

// 3 
echo("\n3. Спрятана ли 1 строка: ");
print_r($excel->is_row_hidden($path,0,1));

// 4
echo("\n4. Показать 1 строку: ");
print_r($excel->show_row($path,0,1));

// конец
echo "\n";

// Quit
$app->quit();
?>