<?php $xhe_host = "127.0.0.1:7020";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();
$excel->open("test\\test.xlsx",false,true);

// 1 
echo("1. Зададим текст ячейки : ");
echo($excel->set_cell("test\\test.xlsx",0,7,"A","new large large large large large large large large text"));

// 2
echo("\n1. Зададим авторазмеры: ");
echo($excel->autosize_row("test\\test.xlsx",0));
echo($excel->autosize_col("test\\test.xlsx",0));

$excel->save("test\\test.xlsx");
$excel->close("test\\test.xlsx");

// конец
echo "\n";

// Quit
$app->quit();
?>