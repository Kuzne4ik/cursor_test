<?php $xhe_host = "127.0.0.1:7020";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();
echo $excelfile->get_rows_count("test\\test.xlsx",1);
echo $excel->get_rows_count("test\\test.xlsx",1);
// 1 
echo("1. Добавим строку : ");
echo($excel->add_row("test\\test.xlsx",1,array(1,2,3,4,5,6,7,8)));

// конец
echo "\n";

// Quit
$app->quit();
?>