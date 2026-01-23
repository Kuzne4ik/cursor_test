<?php $xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Получим количество строк в 0 листе: ");
echo($excelDataReader->get_rows_count("test/test.xlsx", 0));

// 2
echo("\n2. Получим количество строк в 4 листе: ");
echo($excelDataReader->get_rows_count("test/test.xlsx", 4));

// 4
echo("\n4. Получим количество строк в 6 листе (ошибка значение от 0): ");
echo($excelDataReader->get_rows_count("test/test.xlsx", 6));

// посмотрим
$app->shell_execute("open","test/test.xlsx");

// Quit
$app->quit();
?>