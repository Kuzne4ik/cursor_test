<?php
// Scenario: Check if all script elements are in a non-running state
// Description: Demonstrates how to verify whether all script elements on a page have completed loading and are not running
// Classes used: DOM, XHEScriptElement, XHEBrowser, XHEApplication

// XHE host
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Пример использования функции is_all_completed
// Проверить что все скрипты находятся в незапущенном состоянии

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");

// Example 1: Check if all scripts are completed (not running)
$all_completed = DOM::$script->is_all_completed();

// Display result
if ($all_completed) {
    echo "All scripts on the page are in a non-running state (completed)\n";
} else {
    echo "Some scripts on the page are still running\n";
}

// Quit application
WINDOW::$app->quit();
?>