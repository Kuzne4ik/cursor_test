<?php

// Сценарий: Для текущей страницы найти DOM элемент и добавить к нему новый атрибут
// Описание: Для текущей страницы Браузера найти DOM элемент <a> и получить его как XHEInterface, и добавить к нему новый атрибут 'label1' со значением 'value1'
// Используемые классы: XHEAnchor, XHEBrowser, XHEApplication

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

// Перейти на страницу полигона, если ранее страница не была загружена
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Пример 1: Получить объект anchor и добавить к нему новый атрибут 'label1' со значением 'value1'
// Получить объект anchor по атрибуту 'name' и получить его как XHEInterface
$targetAnchorInterface = DOM::$anchor->get_by_name("list");
// Добавить к нему новый атрибут 'label1' со значением 'value1'
$targetAnchorInterface->add_attribute("label1","value1");


// Остановить работу
WINDOW::$app->quit();
?>
