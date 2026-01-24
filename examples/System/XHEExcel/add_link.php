<?php $xhe_host = "127.0.0.1:5006";

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
echo("1. Добавим веб гиперссылку : ");
echo($excel->add_link("test/test.xlsx",0,1,"D","Yandex","https://yandex.ru","yandex"));

// 2
echo("\n2. Добавим гиперссылку перейти на ячейку  : ");
echo($excel->add_link("test/test.xlsx",0,2,"D","B1","B1","B1"));

// 3
echo("\n3. Добавим гиперссылку перейти на ячейку  в другом листе: ");
echo($excel->add_link("test/test.xlsx",0,3,"D","new sheet","'new sheet'!A1","new sheet"));

$app->pause(0);

// закроем
$excel->save($path);
$excel->close($path);

// конец
echo "\n";

// Quit
$app->quit();
?>