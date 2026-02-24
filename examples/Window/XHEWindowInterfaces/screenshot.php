<?php $xhe_host = "127.0.0.1:7070";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

$app->set_title("XWeb");

// 1 
echo "1. Сделаем скриншот приложения: ";
echo $window->get_all_by_text("XWeb")[0]->screenshot("c:\\1.jpg")."<br>";
$app->shell_execute("open","C:\\1.jpg");

// 2
echo "2. Сделаем скриншот части приложения: ";
echo $window->get_all_by_text("XWeb")[0]->screenshot("c:\\2.jpg",10,10,200,200)."<br>";
$app->shell_execute("open","C:\\2.jpg");

// 3
echo "3. Сделаем упрощенный скриншот приложения: ";
echo $window->get_all_by_text("XWeb")[0]->screenshot("c:\\3.jpg",-1,-1,-1,-1,true)."<br>";
$app->shell_execute("open","C:\\3.jpg");

// конец
echo "\n";

// Quit
$app->quit();
?>