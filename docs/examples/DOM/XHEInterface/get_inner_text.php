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
echo "2. Получить текст ссылки по её href - точное соответствие : ";
echo $anchor->get_by_attribute("href",TEST_SITE_URL)->get_inner_text()."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>