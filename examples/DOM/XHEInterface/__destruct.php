<?php

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
    $path = "../../../Templates/init.php";
require($path);

// начало
echo "\n<span>interface->".basename (__FILE__)."</span\n";

// 1
echo "1. Перейдем на полигон: ";
echo WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2 
echo "2. Щелкнем по элементу с href равным " . TEST_SITE_URL . " через клон : ";
$targetAnchorClone=null;
$targetAnchor = DOM::$anchor->get_by_attribute("href",TEST_SITE_URL,true);
$targetAnchorClone = $targetAnchor->get_clone();
$targetAnchor->__destruct();
var_export($targetAnchorClone->click());

// конец
echo "\n";

// Quit
WINDOW::$app->quit();
?>