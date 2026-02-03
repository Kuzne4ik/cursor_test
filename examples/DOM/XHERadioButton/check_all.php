<?php
// Scenario: Check or uncheck all radio buttons on a page
// Description: Demonstrates how to check or uncheck all radio buttons on a page simultaneously
// Classes used: DOM, XHERadioButton, XHEBrowser, XHEApplication
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции check_all для радиобокса
// Установить/снять отметки со всех радиобоксов на странице

// Navigate to a page with radio buttons
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_radio");

// Wait for the page to load
WEB::$browser->wait_js();

// Check all radio buttons on the page (within the iframe)
DOM::$radiobox->check_all(true, "iframeResult");

// Uncheck all radio buttons on the page (within the iframe)
DOM::$radiobox->check_all(false, "iframeResult");

// Note: For radio buttons, checking all will typically result in only the last one being checked
// since radio buttons with the same name are mutually exclusive

// Остановить работу
WINDOW::$app->quit();