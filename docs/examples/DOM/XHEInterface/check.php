<?php

// Сценарий: Для текущей страницы найти DOM элемент checkbox и для него установить отметку
// Описание: Для текущей страницы найти DOM элемент <input type="checkbox"> и для найденного checkbox установить или снять отметку
// Используемые классы: XHECheckButton, XHEInterface, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "checkbox.html");

// Пример 1: Найти DOM элемент checkbox и установить на нем отметку.
// Получить объект input с типом checkbox по порядковому номеру 1 среди input этого типа и получить его как XHEInterface
$targetCheckBox = DOM::$checkbox->get_by_number(1);

// Проверить, что элемент DOM получен
if ($$targetCheckBox->is_exist())
{
    // Для найденного checkbox установить отметку (добавить атрибут checked)
    $targetCheckBox->check(true);
}
else
{
    echo("Не удалось Получить элемент DOM по номеру");
}


// Пример 2: Найти DOM элемент checkbox и снять на нем отметку.
// Получить объект input с типом checkbox по порядковому номеру 1 среди input этого типа и получить его как XHEInterface
$targetCheckBox = DOM::$checkbox->get_by_number(1);

// Проверить, что элемент DOM получен
if ($targetCheckBox->is_exist())
{
    // Для найденного checkbox снять отметку (удалить атрибут checked)
    $targetCheckBox->check(false);
}
else
{
    echo("Не удалось Получить элемент DOM по номеру");
}

// Остановить работу
WINDOW::$app->quit();
?>