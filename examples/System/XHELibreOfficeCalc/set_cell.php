<?php 
$xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
require("../../../Templates/init.php");

// начало
echo "\n<font color=blue>libreOfficeCalc->".basename (__FILE__)."</font>\n";

// 1
echo("1. Зададим текст ячейки (8, 1): ");
echo($libreOfficeCalc->set_cell("test/test.ods", 0, 8, 1, "99999"));

// 2 
echo("\n2. Получим текст ячейки (8, 1): ");
echo($libreOfficeCalc->get_cell("test/test.ods", 0, 8, 1));

// 3
echo("\n3. Зададим текст ячейки (5, 33): ");
echo($libreOfficeCalc->set_cell("test/test.ods", 0, 5, 33, "new text 5"));

// 4
echo("\n4. Получим текст ячейки (5, 33): ");
echo($libreOfficeCalc->get_cell("test/test.ods", 0, 5, 33));

// 5
//echo("\n5. Формула: ");
//echo($libreOfficeCalc->set_cell("test/test.ods", 0, 10, "B", "=SUM(B7:B9)"));
//$libreOfficeCalc->set_cell_type("test/test.ods", 0, 10, "B", "Number");


// посмотрим
$app->shell_execute("open","test/test.ods");

// конец
echo "\n";

// Quit
$app->quit();
?>