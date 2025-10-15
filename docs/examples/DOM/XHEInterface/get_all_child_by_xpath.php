<?php

// Сценарий: Для текущей страницы найти DOM элемент и получить его дочерние DOM элементы по XPath выражению, и получить у каждого дочернего объекта его внутренний текст
// Описание: Для текущей страницы найти DOM элемент как XHEInterface, и получить его дочерние DOM элементы по XPath выражению как XHEInterfaces, и получить у каждого дочернего объекта его внутренний текст
// Используемые классы: XHEDiv, XHEBrowser, XHEApplication, XHEInterface, XHEInterfaces

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

// Пример 1: Для текущей страницы найти DOM элемент как XHEInterface, и получить его дочерние DOM элементы по XPath выражению как XHEInterfaces, и получить у каждого дочернего объекта его внутренний текст как массив строк

// Получить объект div по атрибуту 'name', как XHEInterface
$targetDiv = DOM::$div->get_by_attribute('name', 'Name', false);

// Получить дочерние DOM элементы у текущего div по XPath выражению для поиска дочерних div элементов, получить результат как объект-коллекцию типа XHEInterfaces
$targetDivChilds = $targetDiv->get_all_child_by_xpath("/div");

// Вызвать для объект-коллекции типа XHEInterfaces на каждом элементе коллекции метод get_inner_text() для получения его внутреннего текста.
// В результате выполнения будет возвращен массив строк внутренних текстов для дочерних элементов текущего div элемента DOM.
$targetDivChildInnerTexts = $targetDivChilds->get_inner_text();

// Вывести все внутренние тексты в консоль по одному
foreach ($targetDivChildInnerTexts as $childInnerText)
    echo($childInnerText . "\n");

// Остановить работу
WINDOW::$app->quit();
?>