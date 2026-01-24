<?php $xhe_host = "127.0.0.1:7040";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// 1 
$excel->kill();
echo("1. Откроем : ");
echo($excel->open("test/test.xlsx",false,true));

// 2
echo("\n2. Скопируем ячейки в буфер обмена : ");
echo($excel->copy_range_to_clipboard("test/test.xlsx",0,"A1","D10"));

// 3
echo("\n3. Вставим ячейки в буфер обмена : ");
echo($excel->paste_range_from_clipboard("test/test.xlsx",2,1,"A"));

sleep(10);
$excel->close("test/test.xlsx");

// конец
echo "\n";

// Quit
$app->quit();
?>