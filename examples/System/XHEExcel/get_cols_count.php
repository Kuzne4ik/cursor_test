<?php $xhe_host = "127.0.0.1:7026";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1
echo("1. Получить число столбцов: ");
echo($excel->get_cols_count("test/test.xlsx",0));

// 2
echo("\n2. Получить число столбцов в строке: ");
echo($excel->get_cols_count("test/test.xlsx",1, 7));



// конец
echo "\n";

// Quit
$app->quit();
?>