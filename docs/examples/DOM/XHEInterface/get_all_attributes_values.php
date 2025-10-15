<?php

// Сценарий: Для текущей страницы найти DOM элемент и получить все значения его атрибутов
// Описание: Для текущей страницы Браузера найти DOM элемент <a> и получить его как XHEInterface,  и получить все значения его атрибутов
// Используемые классы: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

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

// Пример 1: Получить объект anchor и получить все значения его атрибутов

// Получить объект anchor по атрибуту 'name', как XHEInterface
$targetAnchorInterface = DOM::$anchor->get_by_name("list");

// У найденного объекта anchor получить все атрибуты.
// Результат вызова это строка с разделителем "<br>" которая содержит названия атрибутов
$attributesString = $targetAnchorInterface->get_all_attributes();
// Разделить строку на массив
$attributes = explode("\n", $attributesString);
// Вывести все названия атрибутов в консоль по одному
foreach($attributes as $attribute)
    echo($attribute . "\n");

// Остановить работу
WINDOW::$app->quit();
?>