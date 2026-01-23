<?php $xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Получим количество столбцов в 0 листе: ");
echo($excelDataReader->get_cols_count("test/test.xlsx", 0));

// 2
echo("\n2. Получим количество столбцов в 4 листе: ");
echo($excelDataReader->get_cols_count("test/test.xlsx", 4));

// посмотрим
$app->shell_execute("open","test/test.xlsx");

// Quit
$app->quit();
?>