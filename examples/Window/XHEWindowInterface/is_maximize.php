<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Проверим максимизацию приложения : ";
$xweb=$window->get_by_text("localhost");
$xweb->restore();
if (!$xweb->is_maximize())
	echo "не максимизировано<br>";

// 2 
echo "2. Максимизируем приложение: ";
echo $xweb->maximize()."<br>";

// 3 
echo "3. Проверим максимизацию приложения: ";
echo $xweb->is_maximize()."<br>";
	
// 4 
echo "4. Восстановим приложение: ";
echo $xweb->restore()."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>