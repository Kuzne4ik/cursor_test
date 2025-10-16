<?php

// Сценарий: Для текущей страницы найти DOM элемент и выполнить на нем click
// Описание: Для текущей страницы найти DOM элемент <a> и на найденном anchor выполнить click
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

// Пример 1: Получить DOM элемент anchor по порядковому номеру 1 среди input этого типа и выполнить click.

// Получить объект anchor по порядковому номеру 1 среди input этого типа и получить его как XHEInterface
$targetAnchor = DOM::$anchor->get_by_number(1);

// Проверить, что элемент DOM получен
if ($targetAnchor->inner_number != -1)
{
    // Для найденного anchor выполнить click
    $targetAnchor->click();
}

// Остановить работу
WINDOW::$app->quit();
?>