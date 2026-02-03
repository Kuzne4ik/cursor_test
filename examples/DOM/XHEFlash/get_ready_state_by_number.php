<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>flash->".basename (__FILE__)."</font>\n";

// без ожижания навигации
$browser->set_wait_params(0,0);
$browser->clear_cache();

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate("http://www.puzzleweb.ru/html/examples/object_width.php")."<br>";

// 2 
echo "2. Получим состояние готовности флэш с номером 0 в 0 фрейме : ";
echo $flash->get_ready_state_by_number(0,0)."\n";

// 3 
echo "3. Получим проигрывается ли флэш с номером 0 в 0 фрейме : ";
echo $flash->is_playing_by_number(0,0)."\n";

// 4 
echo "4. Остановим флэш с номером 0 в 0 фрейме : ";
echo $flash->stop_by_number(0,0)."\n";

// 5 
echo "5. Получим проигрывается ли флэш с номером 0 в 0 фрейме : ";
if(!$flash->is_playing_by_number(0,0))
	echo "остановлен";

// конец
echo "\n";

// Quit
$app->quit();
?>