<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excel->".basename (__FILE__)."</font>\n";

$excel->kill();

// путь к файлу
$path = "test/test_create.xlsx";
// Заголовки (для первой строки)
$headers=array("header 1","header 2","header 3");

// 1 
echo("1. Создадим новый Excel файл с заголовками: ");
echo($excel->create($path, "Sheet 1", $headers));


// конец
echo "\n";

// Quit
$app->quit();
?>