<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2 
echo "2. По полному урлу : ";
echo $anchor->get_by_attribute("href",TEST_SITE_URL)->get_y()."<br>";

// 3
echo "3. Перейдем на полигон: ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

// 4
echo "4. Получим x у (в видимой части страницы) ссылки : ";
$anchor->get_by_number(110)->focus();
echo $anchor->get_by_number(110)->get_y(true)."\n";

// 5
echo "5. Получим у ссылки (на странице): ";
echo $anchor->get_by_number(110)->get_y()."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>