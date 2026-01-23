<?php $xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Получим текст ячейки (1 A): ");
echo($excelDataReader->get_cell("test/test.xlsx", 0, 1, 1));

// 2 
echo("\n2. Получим текст ячейки (2 B): ");
echo($excelDataReader->get_cell("test/test.xlsx", 0, 2, 2));

// 3
echo("\n3. Получим текст ячейки (1 C): ");
echo($excelDataReader->get_cell("test/test.xlsx", 0, 1, 3));

// 4
echo("\n4. Получим текст ячейки (ошибка больше чем доступно колонок): ");
echo($excelDataReader->get_cell("test/test.xlsx", 0, 5, 25));

// посмотрим
$app->shell_execute("open","test/test.xlsx");

// Quit
$app->quit();
?>