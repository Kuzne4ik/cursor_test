<?php $xhe_host = "127.0.0.1:7020";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Зададим числовой формат ячейки : ");
echo($excel->set_cell_format("test\\test.xlsx",0,19,"D","Currency"));



// конец
echo "\n";

// Quit
$app->quit();
?>