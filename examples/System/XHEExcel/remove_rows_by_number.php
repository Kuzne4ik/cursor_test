<?php $xhe_host = "127.0.0.1:7020";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$path="test\\test.xlsx";

// 1 
echo("1. Уберем 7-9 строки: ");
echo($excel->remove_rows_by_number($path,0,7,3));



// конец
echo "\n";

// Quit
$app->quit();
?>