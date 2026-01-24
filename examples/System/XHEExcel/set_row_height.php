<?php $xhe_host = "127.0.0.1:7040";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();
$excel->open("test\\test.xlsx",false,true);

// 1
echo("1. Зададим высоту: ");
echo($excel->set_row_height("test\\test.xlsx",0,1,50));

//$excel->save("test\\test.xlsx");
//$excel->close("test\\test.xlsx");

// конец
echo "\n";

// Quit
$app->quit();
?>