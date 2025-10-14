<?php $xhe_host = "127.0.0.1:7028";
 
// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);
 
// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";
 
// 1 
echo "1. Перейдем в яндекс : ";
echo $browser->navigate("http://ya.ru")."<br>";
sleep(1);
 
// 2 
echo "2. Введем текст в 0 поле ввода : ";
echo $input->get_by_number(0)->send_input("Web тест abc абвгдеё [COLOR=\"red\"] Сообщение [/COLOR]");

// конец
echo "<hr><br>";
 
// Quit
$app->quit();
?>