<?php $xhe_host = "127.0.0.1:7020";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1
echo("1. Получить число листов: ");
echo($excel->get_sheets_count("test/test.xlsx"));

// конец
echo "\n";

// Quit
$app->quit();
?>