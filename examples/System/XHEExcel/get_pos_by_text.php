<?php $xhe_host = "127.0.0.1:7020";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$path="test\\test.xlsx";
$excel->kill();
$excel->open($path,false,true);

// 1 
echo("1. Получим позицию ячейки с заданным текстом: ");
print_r($excel->get_pos_by_text($path,1,"1",false));

// 2
echo("\n2. Получим позицию ячейки с заданным текстом в заданом столбце: ");
print_r($excel->get_pos_by_text($path,1,"1",false,false,"D"));

$excel->close($path);

// конец
echo "\n";

// Quit
$app->quit();
?>