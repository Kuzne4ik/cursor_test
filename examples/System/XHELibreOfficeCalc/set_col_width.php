<?php 
$xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
require("../../../Templates/init.php");

// начало
echo "\n<font color=blue>libreOfficeCalc->".basename (__FILE__)."</font>\n";

// 1
echo "1. Увеличить ширину столбца 1 до 5см в таблице 0: \n";
$res1 = $libreOfficeCalc->set_col_width("test/test.ods", 0,  1, "5cm");
$res1 = $res1 ? 'true' : 'false';
echo $res1."\n";

// посмотрим
$app->shell_execute("open","test/test.ods");

// конец
echo "\n";

// Quit
$app->quit();
?>