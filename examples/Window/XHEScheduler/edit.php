<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим нулевую заадчу : ";
echo $scheduler->get(0,$path,$type,$date,$time,$count,$active,$comments,$add_param)."<br>";

// 2 
echo "2. Отредактируем нулевую задчу : ";
$next_time = date("H:i:s", time() + 200);
$new_date=date("Y-m-d");
$add_param=15;
echo $scheduler->edit(0,$path,$type, $new_date,$next_time,$count, true,$comments,$add_param);

//$app->restart('','',$app->get_port());

// конец
echo "\n";

// Quit
$app->quit();
?>