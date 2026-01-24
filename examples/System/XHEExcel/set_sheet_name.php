<?php $xhe_host = "127.0.0.1:7023";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Зададим имя листа : ");
echo($excel->set_sheet_name("test\\test.xlsx",0,"Новое имя 2"));

// 2
echo("\n2. Получим имя листа : ");
echo($excel->get_sheet_name("test\\test.xlsx",0));



// конец
echo "\n";

// Quit
$app->quit();
?>