<?php $xhe_host = "127.0.0.1:7024";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate("http://wordstat.yandex.ru")."<br>";

// 2 
echo "2. Существует ли кнопка с нулевым номером : ";
echo $button->get_by_number(0)->is_exist()."<br>";

// 3 
echo "3. Существует ли test-region : ";
if (!$div->get_by_name("test-region")->is_exist())
	echo "не существует<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>