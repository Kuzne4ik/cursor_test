<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Зададим текст в навигацию : ";
$navigate=$window->get_all_by_text("localhost", false)[0]->get_child_by_number(0)->get_child_by_class("XTPToolBar")->get_child_by_class("RichEdit");
echo $navigate->input("ya.ru")."<br>";sleep(1);
echo $navigate->key(13)."<br>";sleep(1);

// конец
echo "\n";

// Quit
$app->quit();
?>