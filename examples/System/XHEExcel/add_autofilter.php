<?php $xhe_host = "127.0.0.1:7028";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// откроем
$path="test/test.xlsx";
$excel->kill();
$excel->open($path,false,true);

// 1
echo("1. Добавим автофильтр : ");
echo($excel->add_autofilter("test/test.xlsx",0,"1:200",1,"1"));

$app->pause(0);

// 2
echo("\n2. Удалим автофильтры  : ");
echo($excel->clear_autofilters("test/test.xlsx",0));

$app->pause(0);

// закроем
$excel->save($path);
$excel->close($path);

// конец
echo "\n";

// Quit
$app->quit();
?>