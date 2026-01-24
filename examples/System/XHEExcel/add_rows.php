<?php $xhe_host = "127.0.0.1:7040";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

$arr = array(
    array(0, 1, 2),
    array(3, 4, 5),
	array(6, 7, 8),
    array(9, 10, 11),
);

// 1 
echo("1. Добавим строки : ");
echo($excel->add_rows("test\\test.xlsx",4,$arr));

// конец
echo "\n";

// Quit
$app->quit();
?>