<?php $xhe_host = "127.0.0.1:7040";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Очистим ячейку : ");
echo($excel->clear_cell("test\\test.xlsx",0,6,"A"));

// конец
echo "\n";

// Quit
$app->quit();
?>