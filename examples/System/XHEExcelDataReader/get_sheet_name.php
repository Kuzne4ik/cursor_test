<?php 
$xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
require("../../../Templates/init.php");

// начало
echo "\n<font color=blue>excelDataReader->" . basename (__FILE__)."</font>\n";

$excel->kill();

// 1
echo("1. Получим имя первого листа (0) : ");
echo($excelDataReader->get_sheet_name("test/test.xlsx", 0));

// 2
echo("\n2. Получим имя второго листа (1): ");
echo($excelDataReader->get_sheet_name("test/test.xlsx", 1));

// посмотрим
$app->shell_execute("open","test/test.xlsx");

// Quit
$app->quit();
?>