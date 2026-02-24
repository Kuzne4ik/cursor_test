<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Проверим видимость главного видимого окна содержащего название localhost : ";
$xweb=$window->get_by_text("localhost");
echo $xweb->is_visible()."<br>";

// 2 
echo "2. Спрячем приложение в трей : ";
echo $app->minimize_to_tray()."<br>";

// 3 
echo "3. Снова проверим видимость : ";
if (!$xweb->is_visible())
  echo "спрятано<br>";

// 4 
echo "4. Покажем приложение из трея : ";
echo $app->show_from_tray()."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>