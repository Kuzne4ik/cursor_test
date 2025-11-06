<?php $xhe_host = "127.0.0.1:5005";

// connect the functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>keyboard->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to Yandex: ";
echo $browser->navigate("http://ya.ru")."<br>";

// 2
echo "2. Get the zero input: ";
$obj=$input->get_by_number(0);
echo $obj->inner_number."<br>";

// 3
echo "3. Enter s (code 83): ";
$keyboard->set_current_language("en");
echo $obj->send_key_down(83,true)." ";
echo $obj->send_key_up(83,true)."<br>";

// 4
echo "4. Navigate to msn: ";
echo $browser->navigate("http://msn.ru")."<br>";
sleep(2);

// 5
echo "5. Move the page down (PgDown) by the element from the specified point: ";
$obj=$webpage->get_element_from_point(81,5);
echo $obj->send_key_down(34,true)." ";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>