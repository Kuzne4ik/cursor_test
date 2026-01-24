<?php $xhe_host = "127.0.0.1:7026";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Зададим имя шрифта ячейки :  ");
echo($excel->set_cell_font_name("test\\test.xlsx",0,7,"A","Arial"));



// конец
echo "\n";

// Quit
$app->quit();
?>