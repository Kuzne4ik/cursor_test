<?php
$xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html") . "\n";

// 2 
echo "2. Получим href у ссылки с текстом Блог : ";
echo $anchor->get_by_inner_text("Блог")->get_href() . "\n";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>