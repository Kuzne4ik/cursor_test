<?php $xhe_host = "127.0.0.1:7020";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Зададим числовой формат ячеек столбца : ");
echo($excel->set_col_format("test\\test.xlsx",0,1,"Currency"));



// конец
echo "\n";

// Quit
$app->quit();
?>