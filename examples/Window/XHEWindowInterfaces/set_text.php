<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим текст главного видимого окна содержащего название Skype : ";
$skype=$window->get_all_by_text("Skype")[0];
echo $skype->get_text()."<br>";

// 2 
echo "2. Изменим текст окна скайпа: ";
echo $skype->set_text("ICQ")."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>