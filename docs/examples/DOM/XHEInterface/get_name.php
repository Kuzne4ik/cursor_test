<?php

// Scenario: For the current page, find a DOM element and get the value of its 'name' attribute
// Description: For the current page, find 0 DOM element <input> and get the value of its 'name' attribute
// Classes used: XHEInput, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting the init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
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