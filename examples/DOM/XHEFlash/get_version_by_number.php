<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>flash->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate("http://www.puzzleweb.ru/html/examples/object_width.php")."<br>";

// 2 
echo "2. Получим версию флэш нулевого элемента : ";
echo $flash->get_version_by_number(0)."\n";

// 3 
echo "3. Получим версию флэш несуществующего элемента : ";
echo $flash->get_version_by_number(100500)."\n";

// 4 
echo "4. Получим версию флэш нулевого элемента в нулевом фрейме : ";
echo $flash->get_version_by_number(0,0)."\n";

// 5 
echo "5. Получим версию флэш элемента в несуществующем фрейме : ";
echo $flash->get_version_by_number(0,100500)."\n";

// конец
echo "\n";

// Quit
$app->quit();
?>