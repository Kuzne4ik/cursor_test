<?php

// Сценарий: Для текущей страницы получить DOM элемент и получить его внутренний HTML
// Описание: Для текущей страницы получить DOM элемент <div> по 'id' и получить его внутренний HTML
// Используемые классы: XHEDiv, XHEInterface, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Пример 1: Для текущей страницы получить DOM элемент <div> по 'id' и получить значение его внутреннего HTML

// Для текущей страницы получить DOM элемент <div> по 'id', не точное соответствие значения атрибута
$targetAnchor = DOM::$anchor->get_by_attribute("id",'id1', false);

// Проверить, что элемент DOM получен
if ($targetAnchor->inner_number != -1)
{
    // Для DOM элемента получить значение внутреннего HTML
    $targetAnchor->get_inner_html();
}


// Остановить работу
WINDOW::$app->quit();
?>
