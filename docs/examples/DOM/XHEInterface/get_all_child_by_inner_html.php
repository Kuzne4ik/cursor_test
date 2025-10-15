<?php

// Сценарий: Для текущей страницы найти DOM элемент и получить его дочерние DOM элементы по HTML, и получить у каждого дочернего объекта его тэг (tag)
// Описание: Для текущей страницы найти DOM элемент как XHEInterface, и получить его дочерние DOM элементы по HTML тексту как XHEInterfaces, и получить у каждого дочернего объекта его тэг (tag)
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

// Пример 1: Для текущей страницы найти DOM элемент как XHEInterface, и получить его дочерние DOM элементы по HTML тексту как XHEInterfaces, и получить у каждого дочернего объекта его тэг (tag) как массив строк

// Получить объект div по атрибуту 'name', как XHEInterface
$targetDiv = DOM::$div->get_by_name('Name');

// Получить дочерние DOM элементы у текущего div по HTML тексту, где значение HTML текста имеет не точное соответствие и глубина поиска это только первый уровень наследования, получить результат как объект-коллекцию типа XHEInterfaces
$divChilds = $targetDiv->get_all_child_by_inner_html("Hello",false, false);

// Вызвать для объект-коллекции типа XHEInterfaces на каждом элементе коллекции метод get_tag() для получения названия его тэг (tag).
// В результате выполнения будет возвращен массив строк названий тэг (tag) для дочерних элементов текущего div элемента DOM.
$targetDivChildTags = $divChilds->get_tag();

// Вывести все тэг (tag) в консоль по одному
foreach ($targetDivChildTags as $childTag)
    echo($childTag . "\n");

// Остановить работу
WINDOW::$app->quit();
?>