<?php

// Сценарий: Для текущей страницы найти DOM элемент и получить названия тэг (tag) всех его родителей в DOM дереве
// Описание: Для текущей страницы найти DOM элемент как XHEInterface и получить названия тэг (tag) цепочки всех его родителей в DOM дереве
// Используемые классы: XHEAnchor, XHEBrowser, XHEApplication, XHEInterface, XHEInterfaces

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

// Пример 1: Получить DOM элемент anchor по id с текстом 'onclick' и получить названия тэг (tag) всех его родителей в DOM дереве

// Получить объект anchor по id с текстом 'onclick', значение атрибута не точное соответствие и получить его как XHEInterface
$targetAnchor = DOM::$anchor->get_by_attribute('id', 'onclick', false);

// Получить все родительские элементы для текущего элемента DOM anchor, как объект-коллекцию типа XHEInterfaces
$divParents = $targetAnchor->get_all_parents();

// Вызвать для объект-коллекции типа XHEInterfaces на каждом элементе коллекции метод get_tag() для получения названия его тэг (tag).
// В результате выполнения будет возвращен массив строк тэг (tag) для родительских элементов текущего элемента DOM.
$targetDivParentTags = $divParents->get_tag();
// Вывести все тэг (tag) в консоль по одному
foreach ($targetDivParentTags as $parentTag)
    echo($parentTag . "\n");

// Остановить работу
WINDOW::$app->quit();
?>