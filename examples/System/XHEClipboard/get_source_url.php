<?php
// Scenario: Get source URL from clipboard

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<span >clipboard->" . basename (__FILE__) . "</span>\n";

// 1
echo "1. Get source URL from clipboard: ";
$url = SYSTEM::$clipboard->get_source_url();
if ($url) {
    echo "Source URL: " . $url . "\n";
} else {
    echo "Source URL is missing\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
