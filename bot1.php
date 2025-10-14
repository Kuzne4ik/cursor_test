<?php

// Строка подключения к API XHE
$xhe_host = "127.0.0.1:7010";

// Путь к файлу init.php
if (!isset($path))
{
    // Путь к файлу init.php для подключения к API XHE
    $path = "../../Templates/init.php";
    // При подключении файла init.php, будет доступен весь функционал классов для работы с API XHE
    require($path);
}

// Перейти на страницу полигона, если ранее не был переход на эту страницу
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");


// Вывести все ссылки (href) на текущей странице
$allHrefs = DOM::$anchor->get_all()->get_href();
foreach($allHrefs as $href)
	echo($href . "\n");

// Найти ссылки на страницу news и вывести их
$newsHrefs = DOM::$anchor->get_all_hrefs_by_attribute("href", "news", false, "\n", "-1");
echo($newsHrefs . "\n");

// Получить все href для anchor, у которых id содержит "23"
$hrefsId23 = DOM::$anchor->get_all_hrefs_by_attribute("id", "23", false, "\n", "-1");
echo($hrefsId23 . "\n");

// Получить элемент anchor по атрибуту id как интерфейс и выполнить на нем клик
$anchorObj = DOM::$anchor->get_by_attribute("id", "some_id_value"); // подставьте актуальный id вместо some_id_value
echo $anchorObj->click() . "\n";


// Остановить работу
WINDOW::$app->quit();
?>