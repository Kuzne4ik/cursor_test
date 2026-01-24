<?php $xhe_host = "127.0.0.1:7027";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Получим имена листов : ");
print_r($excel->get_sheets_names("test\\test.xlsx",0));



// конец
echo "\n";

// Quit
$app->quit();
?>