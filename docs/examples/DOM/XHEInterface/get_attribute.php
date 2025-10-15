<?php

// Сценарий: Для текущей страницы найти DOM элемент и получить значение его атрибута
// Описание: Для текущей страницы найти DOM элемент <a> и получить значение его атрибута
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

// Пример 1: Получить DOM элемент anchor по id с текстом 'onclick' и получить значения его атрибута id

// Получить объект anchor по id с текстом 'onclick', значение атрибута не точное соответствие и получить объект anchor как XHEInterface
$targetAnchor = DOM::$anchor->get_by_attribute('id', 'onclick', false);

// Для найденного объекта image получить значение его атрибута 'id', как переменную
$targetImageInterfaceAlt = $targetAnchor->get_attribute('id');

// Остановить работу
WINDOW::$app->quit();
?>