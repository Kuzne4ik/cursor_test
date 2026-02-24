<?php $xhe_host = "127.0.0.1:7019";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим положение XHE на рабочем столе : <br><br>";
$skype=$window->get_by_text("Human",false);
echo "x=".$skype->get_x()."<br>";
echo "y=".$skype->get_y()."<br>";
echo "width=".$skype->get_width()."<br>";
echo "height=".$skype->get_height()."<br>";

// 2
echo "\n2. Получим положение клиентской части XHE на рабочем столе : <br><br>";
$skype=$window->get_by_text("Human",false);
echo "x=".$skype->get_x(true)."<br>";
echo "y=".$skype->get_y(true)."<br>";
echo "width=".$skype->get_width(true)."<br>";
echo "height=".$skype->get_height(true)."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>