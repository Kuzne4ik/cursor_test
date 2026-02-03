<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)) {
      $path = "../../../Templates/init.php";
    require($path);
}

// начало
echo "\n<span>anchor->".basename (__FILE__)."</span>\n";

// 1 
echo "1. Перейдем на полигон: ";
WEB::$browser->set_wait_params(10, 1);
echo(WEB::$browser->navigate(TEST_SITE_URL). "\n");

// 2 
echo("2. Получить элементы по JS функции из скрипта: ");
$objs = DOM::$element->get_all_by_js("(function JS_XHE_GetElements(){var elms=document.querySelectorAll('.menu_lnk'); return elms;}");
var_export($objs->get_attribute("class"));

// конец
echo("\n");

// Quit
WINDOW::$app->quit();
?>