<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get class name of windows
echo "\n";

// Example 1: Get class of the main visible window containing "Skype" text
echo "Example 1: Get class of the main visible window containing 'Skype' text\n";
$windowText1 = "Skype";
$skypeWindow = WINDOW::$window->get_by_text($windowText1);
$skypeWindowClass = $skypeWindow->get_class_name();
echo "Class of window with text '" . $windowText1 . "': " . $skypeWindowClass . "\n";

// Example 2: Get class of the main visible window with number 0
echo "Example 2: Get class of the main visible window with number 0\n";
$windowNumber1 = 0;
$windowByNumber1 = WINDOW::$window->get_by_number($windowNumber1);
$windowByNumber1Class = $windowByNumber1->get_class_name();
echo "Class of window with number " . $windowNumber1 . ": " . $windowByNumber1Class . "\n";

// Example 3: Get class of window with number 100 (including non-visible)
echo "Example 3: Get class of window with number 100 (including non-visible)\n";
$windowNumber2 = 100;
$visibly = false;
$windowByNumber2 = WINDOW::$window->get_by_number($windowNumber2, $visibly);
$windowByNumber2Class = $windowByNumber2->get_class_name();
echo "Class of window with number " . $windowNumber2 . " (including non-visible): " . $windowByNumber2Class . "\n";

// Quit the application
WINDOW::$app->quit();
?>