<?php $xhe_host = "127.0.0.1:3039";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("\n1. Вытащим страницы : ");
echo($excel->export_sheets("test\\test.xlsx","sheets"));

// конец
echo "\n";

// Quit
$app->quit();
?>