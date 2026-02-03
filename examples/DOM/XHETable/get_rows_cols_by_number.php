<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>table->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "table.html")."<br><br>";

// 2 
echo "2. Получим содержимое 3 ячеек (1:1)(2:3)(6:2) как html : <br><br>";
echo $table->get_rows_cols_by_number(0,"1,2,6","1,3,2",true)."<br><br>";

// 3 
echo "3. Получим содержимое всех ячеек как текст, отделив друг от друга | : <br><br>";
echo $table->get_rows_cols_by_number(0,"","",false," | ")."<br><br>";

// 4 
echo "4. Получим содержимое ячеек у несуществующего элемента : ";
if (!$table->get_rows_cols_by_number(100500,"1,2,6","1,3,2",false," | "))
	echo "Нет такого элемента\n<br>";

// 5 
echo "5. Получим содержимое 3 ячеек (1:1)(2:3)(6:2) как html в нулевом фрейме : <br><br>";
echo $table->get_rows_cols_by_number(0,"1,2,6","1,3,2",true,"<br>",0)."<br><br>";

// 6 
echo "6. Получим содержимое ячеек у несуществующего элемента в нулевом фрейме : ";
if (!$table->get_rows_cols_by_number(100500,"1,2,6","1,3,2",false," | ",0))
	echo "Нет такого элемента\n<br>";

// 7 
echo "7. Получим содержимое ячеек у элемента в несуществующем фрейме : ";
if (!$table->get_rows_cols_by_number(0,"1,2,6","1,3,2",false," | ",5))
	echo "нет такого фрейма<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>