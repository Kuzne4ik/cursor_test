<?php $xhe_host = "127.0.0.1:7020";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$path= "test/test.xlsx";

// 1 
$excel->kill();
echo("\n1. Откроем : ");
echo($excel->open($path,true,true));

// 1
echo("\n2. Получить содержимое ячейки  : ");
print_r($excel->get_cell($path,0,1,3));

$excel->close($path);

// конец
echo "\n";

// Quit
$app->quit();
?>