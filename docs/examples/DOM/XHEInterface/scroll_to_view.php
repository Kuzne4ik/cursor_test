<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// зададим высоту браузера 
$browser->set_height(200);

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2 
echo "2. Передвинем в область видимости (низ) элемент с заданным id : ";
echo $anchor->get_by_id("list")->scroll_to_view(0)."<br>";

sleep(2);

// 3 
echo "3. Передвинем в область видимости (верх) элемент с заданным id  : ";
echo $anchor->get_by_id("list")->scroll_to_view(1)."<br>";

sleep(2);

// 3 
echo "3. Передвинем плавно в область видимости (центр) элемент с заданным id  : ";
echo $anchor->get_by_id("list")->scroll_to_view(2,true)."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>