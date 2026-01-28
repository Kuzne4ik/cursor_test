<?php $xhe_host = "127.0.0.1:5006";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Прочитать заданную таблицу как текст : <br><br>");
echo $wordfile->get_table_by_number("test\\test.docx",0);

// 2
echo("\n\n2. Прочитать заданную таблицу как массив : <br><br>");
print_r($wordfile->get_table_by_number("test\\test.docx",0,true));

// конец
echo "\n";

sleep(1);

// Quit
$app->quit();
?>