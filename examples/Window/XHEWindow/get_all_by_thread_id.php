<?php
// Scenario: Get all windows by thread ID

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get Studio window to obtain its thread ID
$windowText = "Studio";
echo("Step: Get Studio window to obtain its thread ID\n");
$xhe = WINDOW::$window->get_by_text($windowText);
$windowTextResult = $xhe->get_text();
echo("Found window with text: $windowTextResult\n");

// Example 1: Get windows by thread ID
$threadId = $xhe->get_thread_id();
$visible = false;
$main = false;
echo("Example 1: Get windows by thread ID\n");
$windowsByThread = WINDOW::$window->get_all_by_thread_id($threadId, $visible, $main);
$windowTextsByThread = $windowsByThread->get_text();
echo("Found " . count($windowTextsByThread) . " windows with thread ID: $threadId\n");

// Quit the application
WINDOW::$app->quit();
?>