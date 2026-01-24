<?php $xhe_host = "127.0.0.1:7026";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Зададим italic шрифт ячейки :  ");
echo($excel->set_cell_font_italic("test\\test.xlsx",0,7,"A",true));



// конец
echo "\n";

// Quit
$app->quit();
?>