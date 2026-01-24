<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excel->".basename (__FILE__)."</font>\n";

// Убить все процессы Excel
$excel->kill();
// Путь к файлу Excel
$path = "test/test.xlsx";

// 1 
echo("1. Зададим строку : ");
echo($excel->set_row($path, 1, 1, array('Завод "Э"', 2, 3, 4, 5, 6, 7, 8)));



// конец
echo "\n";

// Quit
$app->quit();
?>