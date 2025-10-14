<?php $xhe_host = "127.0.0.1:7014";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

// 2 
echo "2. Виден ли с нулевым номером : ";
echo $anchor->get_by_number(0)->is_view_now()."<br>";

// 3 
echo "3. Виден ли 100 anchor : ";
if (!$anchor->get_by_number(100)->is_view_now())
	echo "не виден<br>";

// 4
echo "4	. Покажем 100 номер : ";
echo $anchor->get_by_number(100)->ensure_visible()."\n";
	
// 5
echo "5. Виден ли 100 anchor : ";
echo $anchor->get_by_number(100)->is_view_now();

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>