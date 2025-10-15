<?php

// Сценарий: Для текущей страницы найти DOM элемент и получить дочерний DOM элемент по выражению xpath
// Описание: Для текущей страницы найти 0 DOM элемент <form> и получить его дочерний DOM элемент по выражению xpath
// Используемые классы: XHEForm, XHEInterface, XHEBrowser, XHEApplication

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

// Пример 1: Для текущей страницы получить 0 DOM элемент <form> и получить его первый дочерний DOM элемент по выражению xpath, поиск на первом уровне дерева

// Получить DOM элемент <form> по номеру 0
$targetForm = DOM::$form->get_by_number(0);

// Получить первый найденный дочерний DOM элемент по выражению xpath как XHEInterface, точное соответствие значения, поиск потомка на первом уровне дерева
$targetFormChild = $targetForm->get_child_by_xpath("/a[2]");

// Вызвать для элемента метод get_tag() для получения названия его тэг (tag).
$targetFormChild->get_tag();

// Остановить работу
WINDOW::$app->quit();
?>
