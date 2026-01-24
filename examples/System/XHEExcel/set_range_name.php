<?php $xhe_host = "127.0.0.1:7027";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1
echo("1. Задать имя диапазона : ");
echo($excel->set_range_name("test/test.xlsx",0,"A1","C3","__Name__"));

// конец
 echo "\n";

// Quit
$app->quit();
?>