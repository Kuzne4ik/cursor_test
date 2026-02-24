<?php
// Scenario: Get all windows by process ID

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get Studio window to obtain its process ID
$windowText = "Studio";
echo("Step: Get Studio window to obtain its process ID\n");
$xhe = WINDOW::$window->get_by_text($windowText);
$windowTextResult = $xhe->get_text();
echo("Found window with text: $windowTextResult\n");

// Example 1: Get windows by process ID
$processId = $xhe->get_process_id();
$visible = false;
$main = false;
echo("Example 1: Get windows by process ID\n");
$windowsByProcess = WINDOW::$window->get_all_by_process_id($processId, $visible, $main);
$windowTextsByProcess = $windowsByProcess->get_text();
echo("Found " . count($windowTextsByProcess) . " windows with process ID: $processId\n");

// Quit the application
WINDOW::$app->quit();
?>