<?php $xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>keyboard->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на яндекс: ";
echo WEB::$browser->navigate("https://ya.ru")."<br>";

// 2 
echo "2. Получим нулевой ввод: ";
$obj = DOM::$input->get_by_number(0);
echo $obj->inner_number . PHP_EOL;

// 3 
echo "3. Введем s (код 83): ";
SYSTEM::$keyboard->set_current_language("en");
echo $obj->send_key_down(83, false)." ";
echo $obj->send_key_up(83, false) . PHP_EOL;

// 4
echo "4. Перейдем на msn: ";
echo WEB::$browser->navigate("http://msn.ru") . PHP_EOL;
sleep(2);

// 5 
echo "5. Сдвинем страницу вниз (PgDown): ";
$obj = WEB::$webpage->get_element_from_point(81,5);
echo $obj->send_key_down(34, false) . " ";

// конец
echo "<hr><br>";

// Quit
WINDOW::$app->quit();
?>