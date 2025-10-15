<?php

// Сценарий: Для текущей страницы найти DOM элемент и для него выполнить фокусировку (focus)
// Описание: Для текущей страницы Браузера найти DOM элемент <a> и получить его как XHEInterface и для него выполнить фокусировку (focus)
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

// Пример 1: Получить объект anchor по атрибуту 'src' и для него выполнить фокусировку (focus)

// Получить объект anchor как XHEInterface по атрибуту 'src', не строгое соответствие значения атрибута
$targetAnchorInterface = DOM::$anchor->get_by_src("list_id", false);
// Для найденного объекта anchor выполнить фокусировку (focus)
$targetAnchorInterface->focus();

// Остановить работу
WINDOW::$app->quit();
?>