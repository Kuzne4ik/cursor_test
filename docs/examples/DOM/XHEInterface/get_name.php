<?php

// Сценарий: Для текущей страницы найти DOM элемент и получить его значение атрибута 'name'
// Описание: Для текущей страницы найти 0 DOM элемент <input> и получить его значение атрибута 'name'
// Используемые классы: XHEInput, XHEInterface, XHEBrowser, XHEApplication

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

// Пример 1: Для текущей страницы найти и получить 0 DOM элемент <input> и получить его значение атрибута 'name'

// Получить DOM элемент <input> по номеру 0
$targetForm = DOM::$input->get_by_number(0);

// Проверить, что элемент DOM получен
if ($targetForm->inner_number != -1) {
    // Для найденного объекта <input> получить значение атрибута 'name'
    echo($targetForm->get_name());
}



// Остановить работу
WINDOW::$app->quit();
?>