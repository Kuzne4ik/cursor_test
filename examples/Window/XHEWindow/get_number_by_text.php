<?php
// Scenario: Get window number by text content

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Get number of localhost window among main and visible windows
$windowText1 = "localhost";
$exactly1 = false;
$visible1 = true;
$main1 = true;
$caseSensitive1 = true;
echo("Example 1: Get number of localhost window among main and visible windows\n");
$windowNumber1 = WINDOW::$window->get_number_by_text($windowText1, $exactly1, $visible1, $main1, $caseSensitive1);
echo("Window number for '$windowText1': $windowNumber1\n");

// Example 2: Get number of Skype window among main and visible windows
$windowText2 = "Skype";
$exactly2 = false;
$visible2 = true;
$main2 = true;
$caseSensitive2 = true;
echo("Example 2: Get number of Skype window among main and visible windows\n");
$windowNumber2 = WINDOW::$window->get_number_by_text($windowText2, $exactly2, $visible2, $main2, $caseSensitive2);
echo("Window number for '$windowText2': $windowNumber2\n");

// Example 3: Get number of Chrome window among main and visible windows
$windowText3 = "Chrome";
$exactly3 = false;
$visible3 = true;
$main3 = true;
$caseSensitive3 = true;
echo("Example 3: Get number of Chrome window among main and visible windows\n");
$windowNumber3 = WINDOW::$window->get_number_by_text($windowText3, $exactly3, $visible3, $main3, $caseSensitive3);
echo("Window number for '$windowText3': $windowNumber3\n");

// Quit the application
WINDOW::$app->quit();
?>