<?php

// Сценарий: Для текущей страницы найти DOM элемент image и получить значение его атрибута 'alt'.
// Описание: Для текущей страницы Браузера найти DOM элемент <image>, и получить его как XHEInterface и получить значение его атрибута 'alt'
// Используемые классы: XHEImage, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Пример 1: Получить объект image по атрибуту 'src' и получить значение его атрибута 'alt'.

// Получить объект image как XHEInterface по атрибуту 'name', не строгое соответствие значения атрибута
$targetImageInterface = DOM::$image->get_by_attribute("name", "screen1", false);

// Проверить, что элемент DOM получен
if ($targetImageInterface->inner_number != -1) {
    // Для найденного объекта image получить значение его атрибута 'alt', как переменную
    $targetImageInterfaceAlt = $targetImageInterface->get_alt();
}

// Остановить работу
WINDOW::$app->quit();
?>