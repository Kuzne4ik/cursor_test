<?php $xhe_host = "127.0.0.1:7020";

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

sleep(3);

// 1
echo("1. Зададим новый файл источника данных для соединения: ");
echo($excel->set_connection_source_data_file_by_number($path,0,"test\\test_connection_replace.xlsx"));

sleep(5);

// закроем
$excel->close($path);

// конец
echo "\n";

// Quit
$app->quit();
?>