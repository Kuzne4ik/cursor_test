<?php $xhe_host = "127.0.0.1:7020";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$path = "test\\test.xlsx";

// 1 
echo("1. Уберем строки: ");
echo($excel->remove_rows_by_ranges($path,0,"7-9,14-20"));



// конец
echo "\n";

// Quit
$app->quit();
?>