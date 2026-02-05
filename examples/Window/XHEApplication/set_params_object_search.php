<?php
// Scenario: Set XHE to case-insensitive DOM object search mode
$xhe_host = "127.0.0.1:7012";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// step
echo "\n\n1. Navigate to polygon\n";
$navigateUrl = TEST_POLYGON_URL . "anchor.html";
$navigateResult = WEB::$browser->navigate($navigateUrl);
echo $navigateResult."\n";

// Example 1
echo "\n\n2. Switch XHE to case-insensitive DOM object search mode\n";
$caseSensitive = false;
$setParamsResult = WINDOW::$app->set_params_object_search($caseSensitive);
if ($setParamsResult)
    echo "Case-insensitive search mode enabled successfully\n";
else
    echo "Failed to enable case-insensitive search mode\n";

// Example 2
echo "\n\n3. Click on element with text equal to quick start (case-insensitive)\n";
$innerText = "быстрый";
$clickResult = DOM::$anchor->click_by_inner_text($innerText, false);
if ($clickResult)
    echo "Element clicked successfully\n";
else
    echo "Failed to click element\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>