<?php $xhe_host = "127.0.0.1:7027";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$path="D:/1.xlsx";

$excel->kill();
$excel->open($path,false,true);
$app->pause(0);

// 1 
echo("1. Обновим данные таблицы, после смены данных во внешнем источнике : ");
echo($excel->refresh_sheet($path,1));

// конец
echo "\n";

// Quit
$app->quit();
?>