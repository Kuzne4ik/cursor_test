<?php $xhe_host = "127.0.0.1:7028";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windows->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Скриншот всего десктопа (1 экран) : ";
echo $windows->screenshot("test\\all0.jpg")."\n";
$app->shell_execute("open","test\\all0.jpg");

// 2
echo "2. Скриншот всего десктопа (2 экран) - упрощенный : ";
echo $windows->screenshot("test\\all1.jpg",-1,-1,-1,-1,true,1)."\n";
$app->shell_execute("open","test\\all1.jpg");

// 3
echo "3. Скриншот части десктопа (1 экран) : ";
echo $windows->screenshot("test\\part0.jpg",100,100,100,100)."\n";
$app->shell_execute("open","test\\part0.jpg");

// конец
echo "\n";

// Quit
$app->quit();
?>