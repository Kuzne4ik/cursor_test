<?php $xhe_host = "127.0.0.1:7011";

// connect the functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>keyboard->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to Yandex: ";
echo WEB::$browser->navigate("https://ya.ru")."<br>";

// 2
echo "2. Get the zero input: ";
$obj = DOM::$input->get_by_number(0);
echo $obj->inner_number . PHP_EOL;

// 3
echo "3. Enter s (code 83): ";
SYSTEM::$keyboard->set_current_language("en");
echo $obj->send_key_down(83, false)." ";
echo $obj->send_key_up(83, false) . PHP_EOL;

// 4
echo "4. Navigate to msn: ";
echo WEB::$browser->navigate("http://msn.ru") . PHP_EOL;
sleep(2);

// 5
echo "5. Move the page down (PgDown): ";
$obj = WEB::$webpage->get_element_from_point(81,5);
echo $obj->send_key_down(34, false) . " ";

// end
echo "<hr><br>";

// Quit
WINDOW::$app->quit();
?>