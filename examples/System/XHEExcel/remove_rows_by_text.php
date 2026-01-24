<?php $xhe_host = "127.0.0.1:7020";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();
$path = "test\\test.xlsx";
//$path = "d://1.xlsx";

// 1 
echo("1. Уберем строку содержащую 1 в столце A: ");
echo($excel->remove_rows_by_text($path,0,"1","A"));



// конец
echo "\n";

// Quit
$app->quit();
?>