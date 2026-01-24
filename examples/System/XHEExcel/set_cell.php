<?php $xhe_host = "127.0.0.1:7028";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();
$path = "test/test.xlsx";
$excel->open($path,false,true);

// 0
echo("\n1. Получить содержимое ячейки  : ");
print_r($excel->get_cell($path,0,1,3));

// 1
echo("\n2. Задать содержимое ячейки  : ");
print_r($excel->set_cell($path,0,1,3,"new"));

// 2
echo("\n3. Задать содержимое ячейки  : ");
print_r($excel->set_cell($path,0,1,4,"new 2"));

// 3
echo("\n3. Задать содержимое ячейки как формулу : ");
print_r($excel->set_cell($path,0,4,"F","=SUM(F1:F3)"));
print_r($excel->set_cell($path,0,3,"F","029"));

$excel->save($path);
$excel->close($path);

// конец
echo "\n";

// Quit
$app->quit();
?>