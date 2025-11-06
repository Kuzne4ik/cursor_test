<?php $xhe_host = "127.0.0.1:7024";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate("http://wordstat.yandex.ru")."<br>";

// 2
echo "2. Does button with number 0 exist: ";
echo $button->get_by_number(0)->is_exist()."<br>";

// 3
echo "3. Does test-region exist: ";
if (!$div->get_by_name("test-region")->is_exist())
	echo "does not exist<br>";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>