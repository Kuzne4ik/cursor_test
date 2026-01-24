<?php $xhe_host = "127.0.0.1:7020";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// откроем
$path="test/test.xlsx";
$excel->kill();
$excel->open($path,false,true);

// 1
echo("1. Отсортируем лист по столбцу по возрастанию : ");
echo($excel->sort_sheet("test/test.xlsx",0,"C",true));

$app->pause(0);

// 2
echo("\n2. Отсортируем лист по всем столбцам по убыванию: ");
echo($excel->sort_sheet("test/test.xlsx",0,"3",false));

$app->pause(0);

// закроем
$excel->close($path);

// конец
echo "\n";

// Quit
$app->quit();
?>