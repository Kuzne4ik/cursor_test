<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Зададим значение : ";
$app->shell_execute("open",'C:\Windows\System32\notepad.exe');
sleep(2);
$xhe=$window->get_by_class("Notepad",true,false)->get_ui_element();
print_r($xhe->input("12345"));
print_r($xhe->input(" 56789",false));

// конец
echo "\n";

// Quit
$app->quit();
?>