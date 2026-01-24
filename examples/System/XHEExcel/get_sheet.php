<?php $xhe_host = "127.0.0.1:7040";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1
echo("1. Получить содержимое листа как массив : ");
print_r($excel->get_sheet("test/test.xlsx",0));

// 2
echo("\n2. Получить содержимое листа как массив (тольок видимые) : ");
print_r($excel->get_sheet("test/test.xlsx",0,3000,true));

// конец
echo "\n";

// Quit
$app->quit();
?>