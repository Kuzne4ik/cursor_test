<?php
$xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excel->".basename (__FILE__)."</font>\n";
// Убить все процессы Excel
$excel->kill();

$path = "test/test.xlsx";
echo("1. Откроем : ");
echo($excel->open($path, false, true));
echo("\n2. Создать значения для строки: ");
echo($excel->set_row($path, 1, 1, array('Завод "Э"', 2, 3, 4, 5, 6, 7, 8)));
echo("\n3. Вырезать и вставить диапазоны: ");
echo($excel->copy_range_and_paste_to_range($path, 1, 4, "A1", "H10", "A1", "H10"));
echo("\n4. Сохранить: ");
$excel->save($path);
// Для наблюдения за результатом работы
sleep(3);
echo("\n5. Закрыть: ");
$excel->close($path);

// конец
echo "\n";

// Quit
$app->quit();
?>