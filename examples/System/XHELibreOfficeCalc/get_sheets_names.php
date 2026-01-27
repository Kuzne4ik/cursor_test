<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
require("../../../Templates/init.php");

// начало
echo "\n<font color=blue>libreOfficeCalc->".basename (__FILE__)."</font>\n";

// 1
echo("1. Получим имена листов : ");
print_r($libreOfficeCalc->get_sheets_names("test\\test.ods"));

// посмотрим
$app->shell_execute("open","test/test.ods");

// Quit
$app->quit();
?>