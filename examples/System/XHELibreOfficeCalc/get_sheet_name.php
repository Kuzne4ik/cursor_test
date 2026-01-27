<?php 
$xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
require("../../../Templates/init.php");

// начало
echo "\n<font color=blue>libreOfficeCalc->".basename (__FILE__)."</font>\n";

// 1
echo("1. Получим имя первого листа : ");
echo($libreOfficeCalc->get_sheet_name("test/test.ods", 0));

// 2
echo("\n2. Получим имя второго листа : ");
echo($libreOfficeCalc->get_sheet_name("test/test.ods", 1));

// посмотрим
$app->shell_execute("open","test/test.ods");

// конец
echo "\n";

// Quit
$app->quit();
?>