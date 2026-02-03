<?php
$xhe_host = "127.0.0.1:3039";

// подключим функциональные объекты, если еще не подключен !!!
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>anchor->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2 
echo "2. Получить номера у ссылок c атрибутом 'alt' равным 'list': ";
$objs = $anchor->get_all_by_properties("alt;list;1");
print_r($objs->get_number());
// кликнем
$objs->click();

echo "3. Получить номера у элементов с текстом содержащим DOM и y<200 x<500: ";
$objs=$anchor->get_all_by_properties("inner_text;DOM;0;x;200;4;y;500;4");
print_r($objs->get_number());

// конец
echo "\n";

// Quit
$app->quit();
?>