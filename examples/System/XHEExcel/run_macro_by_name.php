<?php $xhe_host = "127.0.0.1:3039";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1
echo("1. Выполнить макрос с заданным именем : ");
echo($excel->run_macro_by_name("test/test.xlsm",0,"MacrosName"));

// конец
echo "\n";

// Quit
$app->quit();
?>