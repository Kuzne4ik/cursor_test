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

// 1 
echo("\n2. Спрятана ли 7 строка: ");
print_r($excel->is_row_hidden($path,0,8));

// конец
echo "\n";

// Quit
$app->quit();
?>