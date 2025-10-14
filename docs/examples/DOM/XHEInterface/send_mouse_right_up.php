<?php $xhe_host = "127.0.0.1:5005";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем в гугл : ";
echo $browser->navigate("https://google.ru")."<br>";

// 2 
echo "2. Вызовем контекстное меню браузера c паузой на отжатие: ";
echo $element->get_by_name("btnI")->send_mouse_right_down(1,1)." ";
sleep(2);
echo $element->get_by_name("btnI")->send_mouse_right_up(1,1)."<br>";

// пауза
sleep(3);

// 3 
echo "3. Нажмем Esc : ";
echo $keyboard->send_key(27);

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>