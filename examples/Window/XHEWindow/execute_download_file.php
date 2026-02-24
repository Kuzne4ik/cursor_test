<?php
$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1  
echo "1. Указали параметры по умолчанию для загрузки: ";
echo $window->execute_download_file() . "\n";
	
// 2 
echo "2. Перейдем на закачку: ";
echo $browser->navigate(TEST_POLYGON_URL . "clear_history.cs.7z") . "\n";
	   
// конец
echo "\n";

// Quit
$app->quit();
?>