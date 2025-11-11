<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции check_by_value для радиобокса.
// Установить отметку на радиобоксе по его значению

// Navigate to a page with radio buttons
WEB::$browser->navigate(TEST_POLYGON_URL . "radiobox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Check the radio button by value (assuming one radio button has value="male")
DOM::$radiobox->check_by_value("male", true, true, "iframeResult");

// Check another radio button by value (assuming another has value="female")
DOM::$radiobox->check_by_value("female", true, true, "iframeResult");

// Example with partial match (if exactly=false)
// This would match any value containing "male" (e.g., "male", "female", etc.)
DOM::$radiobox->check_by_value("male", false, true, "iframeResult");

// Остановить работу
WINDOW::$app->quit();