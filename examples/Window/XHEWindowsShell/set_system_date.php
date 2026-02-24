<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windows->".basename (__FILE__)."</font>\n";

// 1  
echo "1. Получим текущую дату : ";
echo $windows->get_system_date()."<br>";
$date=explode("-",$windows->get_system_date());

// 2 
echo "2. Зададим новую системную дату 2012.11.06 : ";
echo $windows->set_system_date(2012,11,6)."<br>";

// пауза
sleep(5);

// 3 
echo "3. Вернём старую дату : ";
echo $windows->set_system_date($date[0],$date[1],$date[2]);

// конец
echo "\n";

// Quit
$app->quit();
?>