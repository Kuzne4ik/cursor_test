<?php 
$xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
require("../../../Templates/init.php");

// начало
echo "\n<font color=blue>libreOfficeCalc->".basename (__FILE__)."</font>\n";

// 1
echo "1. Установить шрифт оранжевый, фон зеленый для ячейки [2,3]: \n";
$res1 = $libreOfficeCalc->set_cell_color("test/test.ods", 0, 2, 3, "#e75322", "#22e74a");
$res1 = $res1 ? 'true' : 'false';
echo $res1."\n";

//2
echo "\n2. Установить шрифт оранжевый, фон синий для ячейки [5,1]: \n";
$res2 = $libreOfficeCalc->set_cell_color("test/test.ods", 0, 5, 1, "#e75322", "#227ee7");
$res2 = $res2 ? 'true' : 'false';
echo $res2."\n";

// посмотрим
$app->shell_execute("open","test/test.ods");

// конец
echo "\n";

// Quit
$app->quit();
?>