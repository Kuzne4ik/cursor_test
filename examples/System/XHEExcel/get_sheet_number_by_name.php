<?php $xhe_host = "127.0.0.1:7023";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Получим номер листа по имени : ");
echo($excelfile->get_sheet_number_by_name("test\\test.xlsx","Лист2"));

// 2
echo("\n2. Получим номер листа по имени : ");
echo($excelfile->get_sheet_number_by_name("test\\test.xlsx","Лист1"));



// конец
echo "\n";

// Quit
$app->quit();
?>