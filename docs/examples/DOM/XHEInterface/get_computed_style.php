<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate("http://ya.ru")."<br>";

// 2 
echo "2. Получим стиль элемента : ";
echo $anchor->get_by_number(2)->get_computed_style()."<br>";

// 3
echo "3. Получим стиль элемента animation : ";
echo $anchor->get_by_number(2)->get_computed_style("animation")."<br>";

// 4
echo "4. Получим все стили псевдо элемента ::before : ";
echo $anchor->get_by_number(2)->get_computed_style("",'::before')."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>