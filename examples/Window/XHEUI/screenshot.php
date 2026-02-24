<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Сделать скриншот : ");
$xhe=$window->get_by_text("localhost")->get_ui_element();
$qstart=$xhe->get_by_property("Name" , "Быстрый Старт");
echo($qstart->screenshot("test/screenshot.png"));

// откроем
$app->shell_execute("open","test/screenshot.png");

// 2
echo("\n2. Сделать частичный скриншот : ");
$xhe=$window->get_by_text("localhost")->get_ui_element();
$qstart=$xhe->get_by_property("Name" , "Быстрый Старт");
echo($qstart->screenshot("test/screenshot.png",5,5,45,12));

// откроем
$app->shell_execute("open","test/screenshot.png");

// конец
echo "\n";

// Quit
$app->quit();
?>