<?php

// Сценарий: Для текущей страницы найти DOM элемент anchor <a> 
// Описание: Для текущей страницы найти DOM элемент <a> по значению атрибута `name` как XHEInterface
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

// Пример 1: Получить объект anchor по атрибуту `name` как XHEInterface

// Получить объект anchor по атрибуту `name` со значением `list`
$targetAnchorInterface = DOM::$anchor->get_by_name("list");

// Проверить, что элемент DOM получен
if ($targetAnchorInterface->inner_number != -1)
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
