<?php $xhe_host = "127.0.0.1:3031";

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
echo "2. Переместим мышь на кнопку 'Мне повезет' : ";
echo $element->get_by_name("btnI")->send_mouse_move_to(1,1)."<br>";
sleep(1);

// 3
echo "3. Перейдем на "  .TEST_SITE_URL . ": ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

// 4
echo "4. Переместим мышь на 2 ссылки: ";
echo $anchor->get_by_number(110)->send_mouse_move_to(1,1,"curve",2000)." ";
sleep(1);
echo $anchor->get_by_number(100)->send_mouse_move_to(1,1,"chaotic",2000)." ";
sleep(1);
echo $anchor->get_by_number(10)->send_mouse_move_to(1,1,"circle",2000);

// 5
echo "\n5. Кликнем в текущей точке : ";
echo $mouse->send_click()."\n";
$browser->wait_for();
sleep(5);

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>