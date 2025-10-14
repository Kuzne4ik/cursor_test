<?php $xhe_host = "127.0.0.1:7014";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate("http://www.wordstat.yandex.ru")."<br>";

// 2 
echo "2. Видна ли кнопка с нулевым номером : ";
echo $button->get_by_number(0)->is_visibled()."<br>";

// 3 
echo "3. Виден ли div с именем ukraine-region : ";
if (!$div->get_by_name("ukraine-region")->is_visibled())
	echo "не виден<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>