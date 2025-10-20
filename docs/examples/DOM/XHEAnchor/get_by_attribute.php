<?php

// Сценарий: Для текущей страницы найти DOM элемент anchor <a> 
// Описание: Для текущей страницы найти DOM элемент <a> по значению атрибута как XHEInterface
// Используемые классы: DOM, XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

// Строка подключения к API XHE
$xhe_host = "127.0.0.1:7010";

// Путь к файлу init.php
if (!isset($path))
{
    // Путь к файлу init.php для подключения к API XHE
    $path = "../../../../../../Templates/init.php";
    // При подключении файла init.php, будет доступен весь функционал классов для работы с API XHE
    require($path);
}

// Перейти на страницу полигона, если ранее страница не была загружена
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Пример 1: Для текущей страницы получить DOM элемент <a> по атрибуту 'href', как объекта XHEInterface, и сделать копию объекта

// Для текущей страницы получить DOM элемент как объекта XHEInterface <a> по значению атрибуту 'href', значение атрибута не точное соответствие
$targetAnchor = DOM::$anchor->get_by_attribute("href",'site.com',false);

// Проверить, что элемент DOM получен
if ($targetAnchor->inner_number != -1)
{
    // Объект anchor получен
}
else
{
    // Объект anchor не найден на странице
}

// Остановить работу
WINDOW::$app->quit();
?>