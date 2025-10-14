<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

sleep(3);
// 2 
echo "2. Проскролируем divs : ";
echo $body->get_by_number(0)->scroll("pageDown")." <br>";
echo $body->get_by_number(0)->scroll("pageDown")." <br>";
echo $body->get_by_number(0)->scroll("pageDown")." <br>";
sleep(3);
echo $body->get_by_number(0)->scroll("down")." <br>";
echo $body->get_by_number(0)->scroll("down")." <br>";
echo $body->get_by_number(0)->scroll("down")." <br>";
sleep(3);
echo $body->get_by_number(0)->scroll("up")." <br>";
echo $body->get_by_number(0)->scroll("up")." <br>";
echo $body->get_by_number(0)->scroll("up")." <br>";
sleep(3);
echo $body->get_by_number(0)->scroll("pageUp")." <br>";
echo $body->get_by_number(0)->scroll("pageUp")." <br>";
echo $body->get_by_number(0)->scroll("pageUp")." <br>";
sleep(3);


// конец
echo "<hr><br>";

// Quit
$app->quit();
?>