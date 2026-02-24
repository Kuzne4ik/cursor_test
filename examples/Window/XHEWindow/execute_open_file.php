<?php
// Scenario: Execute open file dialog with file selection parameters

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

while (true)
{
    // Step: Navigate to input file test page
    $testPageUrl = TEST_POLYGON_URL . "inputfile.html";
    echo("Navigate to HTML page: $testPageUrl\n");
    WEB::$browser->navigate($testPageUrl);
    WEB::$browser->wait_js();
    sleep(1);

    // Example 1: Set file dialog parameters for single file
    $dialogFilter = "ф";
    $filePath = "test\\file.txt";
    $dialogButton = "&Открыть";
    $isModal = false;
    $isDialog = true;
    echo("Example 1: Set file dialog parameters for single file\n");
    $result1 = WINDOW::$window->execute_open_file($dialogFilter, $filePath, $dialogButton, $isModal, $isDialog);
    echo("Single file dialog setup: " . ($result1 ? "Success" : "Failed") . "\n");

    // Step: Open file selection dialog
    echo("Step: Open file selection dialog\n");
    $inputElement = DOM::$inputfile->get_by_name("Name");
    $focusResult = $inputElement->focus();
    echo("Input element focused: " . ($focusResult ? "Success" : "Failed") . "\n");
    $inputElement->send_mouse_click();
    sleep(1);

    // Example 2: Set file dialog parameters for multiple files
    $multipleFilePaths = "\"c:\\file1.txt\" \"c:\\file2.txt\" ";
    echo("Example 2: Set file dialog parameters for multiple files\n");
    $result2 = WINDOW::$window->execute_open_file($dialogFilter, $multipleFilePaths, $dialogButton, $isModal, $isDialog);
    echo("Multiple files dialog setup: " . ($result2 ? "Success" : "Failed") . "\n");

    // Step: Open file selection dialog for multiple files
    echo("Step: Open file selection dialog for multiple files\n");
    $inputElement1 = DOM::$inputfile->get_by_name("Name1");
    $focusResult1 = $inputElement1->focus();
    echo("Input element1 focused: " . ($focusResult1 ? "Success" : "Failed") . "\n");
    $inputElement1->send_mouse_click();
    sleep(2);
}

// Quit the application
WINDOW::$app->quit();
?>
