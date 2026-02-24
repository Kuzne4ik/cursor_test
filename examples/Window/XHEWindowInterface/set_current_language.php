<?php $xhe_host = "127.0.0.1:7012";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим окно блокнота : ";
$notebook=$window->get_by_text("Блокнот",false);
echo $notebook->is_exist()."<br>";

// 2 
echo "2. Введем на английском языке : ";
echo $notebook->set_current_language("en");
echo $notebook->key("abcd",true)."<br>";
sleep(1);

// 3 
echo "3. Введем на русском языке : ";
$notebook->set_current_language("ru");
echo $notebook->key("абвгд")."<br>";
sleep(1);

// конец
echo "\n";

// Quit
$app->quit();
?>