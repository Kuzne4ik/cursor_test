<?php $xhe_host = "127.0.0.1:7028";
 
// connect the functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);
 
// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";
 
// 1
echo "1. Navigate to Yandex: ";
echo $browser->navigate("http://ya.ru")."<br>";
sleep(1);
 
// 2
echo "2. Enter text into the 0 input field: ";
echo $input->get_by_number(0)->send_input("Web тест abc абвгдеё [COLOR=\"red\"] Сообщение [/COLOR]");

// end
echo "<hr><br>";
 
// Quit
$app->quit();
?>