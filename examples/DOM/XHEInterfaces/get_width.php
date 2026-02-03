<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>interface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2 
echo "2. Получим ширину элемента с href равным " . TEST_SITE_URL . " : ";
echo $element->get_all_by_attribute("href",TEST_SITE_URL)[0]->get_width()."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>