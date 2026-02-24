<?php
// Scenario: Get all windows by text containing specific characters

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Get texts of main visible windows containing letter 'a'
$textFilter = "a";
echo("Example 1: Get texts of main visible windows containing letter 'a'\n");
$windows_textA = WINDOW::$window->get_all_by_text($textFilter);
$windowTexts = $windows_textA->get_text();
echo("Found " . count($windowTexts) . " windows containing text '$textFilter'\n");

// Quit the application
WINDOW::$app->quit();
?>