<?php $xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

$excel->kill();

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Получим количество листов : ");
echo($excelDataReader->get_sheets_count("test/test.xlsx"));

// посмотрим
$app->shell_execute("open","test/test.xlsx");

// Quit
$app->quit();
?>