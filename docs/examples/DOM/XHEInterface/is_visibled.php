<?php $xhe_host = "127.0.0.1:7014";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate("http://www.wordstat.yandex.ru")."<br>";

// 2
echo "2. Is button with number 0 visible: ";
echo $button->get_by_number(0)->is_visibled()."<br>";

// 3
echo "3. Is div with name ukraine-region visible: ";
if (!$div->get_by_name("ukraine-region")->is_visibled())
	echo "not visible<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>