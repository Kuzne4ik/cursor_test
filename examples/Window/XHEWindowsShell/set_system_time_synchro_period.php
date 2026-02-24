<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windows->".basename (__FILE__)."</font>\n";

// 1  
echo "1. Получим текущее время : ";
echo $windows->get_system_time()."<br>";
$time=explode("-",$windows->get_system_time());

// 2 
echo "2. Зададим новое системное время 01:02:03 : ";
echo $windows->set_system_time(01,02,03)."<br>";

// пауза
sleep(5);

// 3 
echo "3. Зададим синхронизацию раз в минуту: ";
echo $windows->set_system_time_synchro_period(60)."\n";

// пауза
sleep(365);

// 3 
echo "3. Вернем синхронизацию раз в неделю (по умолчанию): ";
echo $windows->set_system_time_synchro_period(604800);

// конец
echo "\n";

// Quit
$app->quit();
?>