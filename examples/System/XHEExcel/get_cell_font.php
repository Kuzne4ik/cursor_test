<?php $xhe_host = "127.0.0.1:7026";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Получим шрифт ячейки : ");
print_r($excel->get_cell_font("test\\test.xlsx",0,6,"A"));



// конец
echo "\n";

// Quit
$app->quit();
?>