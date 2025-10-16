<?php

// Сценарий: Для текущей страницы получить DOM элемент и получить его высоту
// Описание: Для текущей страницы получить DOM элемент <anchor> по 'href' и получить его высоту
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
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Пример 1: Для текущей страницы получить DOM элемент <anchor> по 'href' и получить его высоту

// Для текущей страницы получить DOM элемент <anchor> по 'href', не точное соответствие значения атрибута
$targetAnchor = DOM::$anchor->get_by_attribute("href",'site.com', false);

// Проверить, что элемент DOM получен
if ($targetAnchor->inner_number != -1)
{
    // Для DOM элемента получить его высоту
    $targetAnchor->get_height();
}


// Остановить работу
WINDOW::$app->quit();
?>
