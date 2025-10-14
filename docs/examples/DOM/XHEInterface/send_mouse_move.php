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
echo $button->get_by_number(3)->send_mouse_move(5,5)." ";
sleep(3);
echo $button->get_by_number(3)->send_mouse_move(5,5)."<br>";

sleep(3);

// 3 
echo "1. Перейдем на "  .TEST_SITE_URL . ": ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

// 4 
echo "4. Переместим мышь на ссылки: ";
echo $anchor->get_by_number(110)->send_mouse_move(1,1,true,4)." ";
sleep(1);
echo $anchor->get_by_number(100)->send_mouse_move(1,1,true,4)." ";
sleep(1);
echo $anchor->get_by_number(10)->send_mouse_move(1,1,true,4)." ";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>