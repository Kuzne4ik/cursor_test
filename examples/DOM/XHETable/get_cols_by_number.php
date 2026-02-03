<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>table->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "table.html")."<br>";

// 2 
echo "2. Получим число столбцов у элемента с 0 номером : ";
echo $table->get_cols_by_number(0,-1,3)."<br>";

// 3 
echo "3. Получим число столбцов у несуществующего элемента : ";
if ($table->get_cols_by_number(100500)==-1)
	echo "Нет такого элемента\n";

// 4 
echo "4. Получим число столбцов у элемента с 0 номером в нулевом фрейме : ";
echo $table->get_cols_by_number(0,0)."<br>";

// 5 
echo "5. Получим число столбцов у несуществующего элемента в нулевом номере : ";
if ($table->get_cols_by_number(100500,0)==-1)
	echo "Нет такого элемента\n";

// 6 
echo "6. Получим число столбцов у элемента в несуществующем фрейме : ";
if ($table->get_cols_by_number(0,5)==-1)
	echo "нет такого фрейма<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>