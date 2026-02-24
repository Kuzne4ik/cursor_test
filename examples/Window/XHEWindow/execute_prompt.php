<?php
// Scenario: Execute prompt dialog with predefined input value

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Navigate to test page
$testPageUrl = "http://javascript.ru/prompt";
echo("Navigate to HTML page: $testPageUrl\n");
WEB::$browser->navigate($testPageUrl);
WEB::$browser->wait_js();

// Example 1: Set prompt dialog parameters
$dialogTitle = "javascript.ru";
$dialogInput = "100500";
$dialogButton = "ОК";
$isModal = false;
$isDialog = true;
echo("Example 1: Set prompt dialog parameters\n");
$result = WINDOW::$window->execute_prompt($dialogTitle, $dialogInput, $dialogButton, $isModal, $isDialog);
echo("Prompt dialog setup: " . ($result ? "Success" : "Failed") . "\n");

// Step: Open prompt dialog
$buttonValue = "Запустить";
echo("Step: Open prompt dialog\n");
$clickResult = DOM::$button->click_by_value($buttonValue, false);
echo("Button clicked: " . ($clickResult ? "Success" : "Failed") . "\n");

// Quit the application
WINDOW::$app->quit();
?>