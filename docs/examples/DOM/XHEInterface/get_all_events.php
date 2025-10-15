<?php

// Сценарий: Для текущей страницы найти DOM элемент и получить все названия событий-атрибутов
// Описание: Для текущей страницы найти DOM элемент как XHEInterface и получить все названия событий-атрибутов
// Используемые классы: XHEAnchor, XHEBrowser, XHEApplication, XHEInterface

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

// Пример 1: Получить DOM элемент anchor по id с текстом 'onclick' и получить все названия событий-атрибутов

// Получить объект anchor по id с текстом 'onclick', значение атрибута не точное соответствие и получить его как XHEInterface
$targetAnchor = DOM::$anchor->get_by_attribute('id', 'onclick', false);

// Получить все названия событий-атрибутов для объекта anchor, как строку с разделителем '<br>'
$targetAnchorEventsString = $targetAnchor->get_all_events();
// Разделить строку на массив
$targetAnchorEvents = explode("<br>", $targetAnchorEventsString);
// Вывести все названия событий-атрибутов в консоль по одной
foreach($targetAnchorEvents as $targetAnchorEvent)
    echo($targetAnchorEvent . "\n");

// Остановить работу
WINDOW::$app->quit();
?>