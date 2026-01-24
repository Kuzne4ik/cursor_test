<?php $xhe_host = "127.0.0.1:7040";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// откроем
$path="test/test.xlsx";
$excel->kill();

// 1
echo("1. Удалим дубликаты строк в листе : ");
echo($excel->dedupe_sheet($path,1));

// конец
echo "\n";

// Quit
$app->quit();
?>