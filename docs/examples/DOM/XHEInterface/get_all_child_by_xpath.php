<?php
$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// чтобы быстрее
$browser->set_wait_params(5, 1);

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html") . "\n";

// 2 
echo "2. Получить inner text всех ссылок : ";
print_r($body->get_by_number(0)->get_all_child_by_xpath("/a")->get_inner_text());

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>