<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate("http://javascript.ru/prompt")."<br>";

// 2  
echo "2. Указали что при появлении диалога, задавать 100500 : ";
echo $window->execute_prompt("javascript.ru","100500","ОК",false)."<br>";

// 3 
echo "3. Откроем диалог ввода данных : ";
echo $button->click_by_value("Запустить",false);

// конец
echo "\n";

// Quit
$app->quit();
?>