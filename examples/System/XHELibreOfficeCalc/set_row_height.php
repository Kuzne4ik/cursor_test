<?php 
$xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
require("../../../Templates/init.php");

// начало
echo "\n<font color=blue>libreOfficeCalc->".basename (__FILE__)."</font>\n";

// 1
echo("1. Увеличить высоту строки 8 до 1.6см в 0 листе : ");
$res1 = $libreOfficeCalc->set_row_height("test/test.ods", 0,  8, "1.6cm");
$res1 = $res1 ? 'true' : 'false';
echo $res1."\n";

// посмотрим
$app->shell_execute("open","test/test.ods");

// конец
echo "\n";

// Quit
$app->quit();
?>