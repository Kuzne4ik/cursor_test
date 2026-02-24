<?php 

$xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1  
echo "1. Укажем логин и пароль по умолчанию : ";
echo $window->execute_authorization("login","password")."<br>";

// 2 
echo "2. Перейдем на полигон: ";
echo $browser->navigate( TEST_SITE_URL . "personal/myshopping/")."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>