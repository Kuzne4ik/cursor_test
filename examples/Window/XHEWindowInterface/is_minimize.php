<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Проверим минимизацию приложения: ";
$xweb=$window->get_by_text("localhost");
if (!$xweb->is_minimize())
	echo "Не минимизировано<br>";

// 2 
echo "2. Минимизируем  : ";
echo $xweb->minimize()."<br>";

// 3 
echo "3. Проверим минимизацию : ";
echo $xweb->is_minimize()."<br>";
	
// 4 
echo "4. Восстановим  : ";
echo $xweb->restore()."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>