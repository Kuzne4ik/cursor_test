<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим параметры заданной задачи : ";
echo $scheduler->get(2,$path_,$type,$date,$time,$count,$active,$comments,$add_param)." : <br>";
echo "path=".$path_;
echo "\ntype=".$type;
echo "\ndate=".$date;
echo "\ntime=".$time;
echo "\ncount=".$count;
echo "\nactive=".$active;
echo "\ncomments=".$comments;
echo "\nadd_param=".$add_param;

// конец
echo "\n";

// Quit
$app->quit();
?>