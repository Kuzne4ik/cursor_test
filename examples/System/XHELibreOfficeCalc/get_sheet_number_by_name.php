<?php 
$xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
require("../../../Templates/init.php");
// начало
echo "\n<font color=blue>libreOfficeCalc->".basename (__FILE__)."</font>\n";

// 1
echo("1. Получим номер листа по имени : ");
echo($libreOfficeCalc->get_sheet_number_by_name("test/test.ods", "Лист2"));

// 2
echo("\n2. Получим номер листа по имени (-1) : ");
echo($libreOfficeCalc->get_sheet_number_by_name("test/test.ods", "Лист1"));

// посмотрим
$app->shell_execute("open","test/test.ods");

// конец
echo "\n";

// Quit
$app->quit();
?>