<?php

// Сценарий: Для текущей страницы найти DOM элемент и добавить к нему дочерний DOM элемент как код HTML
// Описание: Для текущей страницы Браузера найти DOM элемент <body> и добавить к нему дочерний DOM элемент anchor как код HTML
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


// Пример 1: Получить объект body и добавить к нему дочерний DOM элемент anchor, как код HTML.
// Получить объект body по номеру 0 как XHEInterface
$targetBody = DOM::$body->get_by_number(0);

// Проверить, что элемент DOM получен
if ($targetBody->is_exist())
{
    // Добавить дочерний DOM элемент anchor, как код HTML
    $targetBody->add_child("a", "<a href=\"http://ya.ru\">yandex.ru</a>");
}
else 
{
    
    echo("Не удалось Получить элемент DOM по номеру");
}

// Остановить работу
WINDOW::$app->quit();
?>
