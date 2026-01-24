<?php $xhe_host = "127.0.0.1:7020";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// 1 
$excel->kill();
echo("\n1. Откроем : ");
echo($excel->open("test/test.xlsx",true,true));

// 2
echo("\n2. Объединим ячейки  : ");
print_r($excel->merge_cells("test/test.xlsx",0,"A1","D1"));

sleep(10);

// 3
echo("\n3. Разъединим ячейки  : ");
print_r($excel->unmerge_cells("test/test.xlsx",0,"A1","D1"));

sleep(10);
$excel->close("test/test.xlsx");

// конец
echo "\n";

// Quit
$app->quit();
?>