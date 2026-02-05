<?php
// Scenario: Set view mode for a debug tab (text or HTML)
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Step: Set tab content before changing view mode
$tabName = "Extended Info";
$content = "<b>Beep-Beep-Beep</b>";
echo "Step: Set tab content\n";
WINDOW::$debug->set_tab_content($tabName, $content);

// Pause to see the content
sleep(3);

// Example 1: Set view mode to text
echo "\n\nExample 1: Set view mode to text\n";
$viewAsText = true;
$result1 = WINDOW::$debug->view_tab_as_text($tabName, $viewAsText);
if ($result1)
    echo "View mode set to text successfully\n";
else
    echo "Failed to set view mode to text\n";

// Pause to see the text view
sleep(3);

// Example 2: Set view mode to HTML
echo "\nExample 2: Set view mode to HTML\n";
$viewAsText = false;
$result2 = WINDOW::$debug->view_tab_as_text($tabName, $viewAsText);
if ($result2)
    echo "View mode set to HTML successfully\n";
else
    echo "Failed to set view mode to HTML\n";

// Pause to see the HTML view
sleep(3);

// Step: Switch to debug tab
echo "\nStep: Switch to debug tab\n";
$debugTabName = "Отладка";
WINDOW::$debug->open_tab($debugTabName);

// Quit the application
WINDOW::$app->quit();
?>