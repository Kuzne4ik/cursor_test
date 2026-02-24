<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим окно навигации : ";
$navigate=$window->get_all_by_text("localhost", false)[0]->get_child_by_number(0)->get_child_by_class("XTPToolBar")->get_child_by_class("RichEdit");
echo $navigate->is_exist()."<br>";

// 2 
echo "2. Введем на английском языке : ";
echo $navigate->set_current_language("en");
echo $navigate->key(65)." ".$navigate->key(66)."<br>";
sleep(1);

// 3 
echo "3. Введем на русском языке : ";
$navigate->set_current_language("ru");
echo $navigate->key(65)." ".$navigate->key(66)."<br>";
sleep(1);

// конец
echo "\n";

// Quit
$app->quit();
?>