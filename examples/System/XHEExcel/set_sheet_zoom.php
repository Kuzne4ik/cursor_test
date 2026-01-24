<?php $xhe_host = "127.0.0.1:7040";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();
$excel->open("test\\test.xlsx",false,true);

// 2
echo("\n2. Зададим масштаб листа : ");
echo($excel->set_sheet_zoom("test\\test.xlsx",0,400));

// конец
echo "\n";

// Quit
$app->quit();
?>