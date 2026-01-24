<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excel->".basename (__FILE__)."</font>\n";

$excel->kill();

// Путь к файлу Excel
$path = "test/test.xlsx";

// 1
$sheet_array = array
(
	array(11,12,13),
	array(21,22,23),
	array(31,32,33,44,55),
);
echo("1. Задать содержимое листа из массива : ");
echo($excel->set_sheet($path, 4, $sheet_array, 3000, 5, 10));



// конец
echo "\n";

// Quit
$app->quit();
?>