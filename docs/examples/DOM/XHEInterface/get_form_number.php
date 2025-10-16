<?php

// Сценарий: Для текущей страницы найти DOM элемент и получить его порядковый номер
// Описание: Для текущей страницы найти DOM элемент <form> и получить его порядковый номер
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

// Пример 1: Для текущей страницы получить DOM элемент <form>, как XHEInterface по порядковому номеру 2 и получить его порядковый номер

// Получить DOM элемент <form>, как XHEInterface по порядковому номеру 2
$targetForm = DOM::$form->get_by_number(2);

// Проверить, что элемент DOM получен
if ($targetForm->inner_number != -1) {
    // Получить для элемента DOM его порядковый номер (итоговое значение должно быть равно 2)
    $targetFormNumber = $targetForm->get_form_number();
}


// Остановить работу
WINDOW::$app->quit();
?>