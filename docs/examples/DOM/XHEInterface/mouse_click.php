<?php $xhe_host = "127.0.0.1:7026";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем в гугл : ";
echo $browser->navigate("http://google.ru")."<br>";

// 2 
echo "2. Кликнем на 6 ссылке : ";
echo $anchor->get_by_number(6)->mouse_click(1,1)."\n";

$browser->wait_for();
sleep(3);

// 3
echo "3. Перейдем на "  .TEST_SITE_URL . ": ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

// 4 
echo "5. Кликнем по ссылке: ";
echo $anchor->get_by_number(110)->mouse_click(2,12)." ";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>