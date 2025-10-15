<?php

// Сценарий: Для текущей страницы найти DOM элемент как объект и копировать этот объект
// Описание: Для текущей страницы найти DOM элемент <a> как объект и копировать этот объект
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

// Пример 1: Для текущей страницы получить DOM элемент <a> по атрибуту 'href', как объекта XHEInterface, и сделать копию объекта

// Для текущей страницы получить DOM элемент как объекта XHEInterface <a> по атрибуту 'href', значение атрибута не точное соответствие
$targetAnchor = DOM::$anchor->get_by_attribute("href",'site.com',false);

// Сделать копию объекта XHEInterface в переменную
$cloneAnchorObject = $targetAnchor->get_clone();


// Остановить работу
WINDOW::$app->quit();
?>