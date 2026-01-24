<?php $xhe_host = "127.0.0.1:7028";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// откроем
$path="test/test.xlsx";
$excel->kill();

// 1
echo("1. Экспорт листа в access : ");
echo($excel->export_to_access($path,"d:/Empty.accdb","Sheet1","new_table"));

// конец
echo "\n";

// Quit
$app->quit();
?>