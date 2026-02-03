<?php
$xhe_host = "127.0.0.1:7013";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)) {
      $path = "../../../Templates/init.php";
    require($path);
}

// начало
echo("\n<span>table->".basename (__FILE__)."</span>\n");

// 1 
echo("\n1. Перейдем на полигон: ");
echo WEB::$browser->navigate(TEST_POLYGON_URL . "table.html")."<br>";

// 2 
echo("\n2. Получим число столбцов у элемента с 0 номером : ");
echo DOM::$table->get_cols_count_by_number(0,-1,3)."<br>";

// 3 
echo("\n3. Получим число столбцов у несуществующего элемента : ");
if (DOM::$table->get_cols_count_by_number(100500) == -1)
	echo("\nНет такого элемента");

// 4 
echo("\n4. Получим число столбцов у элемента с 0 номером в нулевом фрейме : ");
echo DOM::$table->get_cols_count_by_number(0,0);

// 5 
echo("\n5. Получим число столбцов у несуществующего элемента в нулевом номере : ");
if (DOM::$table->get_cols_count_by_number(100500,0)==-1)
	echo("\nНет такого элемента");

// 6 
echo("\n6. Получим число столбцов у элемента в несуществующем фрейме : ");
if (DOM::$table->get_cols_count_by_number(0,5) == -1)
	echo("\nнет такого фрейма");


// Quit
WINDOW::$app->quit();
?>