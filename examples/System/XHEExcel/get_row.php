<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excel->".basename (__FILE__)."</font>\n";

// Закрыть все процессы Excel
$excel->kill();
$path="test/test.xlsx";

// 1 
echo("1. Получим строку №1" . PHP_EOL);
print_r($excel->get_row($path, 0, 1));

echo("2. Получим строку №2" . PHP_EOL);
print_r($excel->get_row($path, 0, 2));

echo("3. Получим строку №3" . PHP_EOL);
print_r($excel->get_row($path, 0, 3));

// конец
echo "\n";

// Quit
$app->quit();
?>