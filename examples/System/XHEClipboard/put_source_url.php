<?php
// Scenario: Put source URL to clipboard and verify it's stored correctly

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
$testUrl = "https://example.com/source";
echo "1. Set source URL to clipboard: ";
echo SYSTEM::$clipboard->put_source_url($testUrl) . "\n";

// 2
echo "2. Get source URL back: ";
$url = SYSTEM::$clipboard->get_source_url();
if ($url) {
    echo "Source URL: " . $url . "\n";
} else {
    echo "Source URL not received\n";
}

// 3
$htmlContent = "<p>Test HTML</p>";
echo "3. Set HTML with source URL: ";
echo SYSTEM::$clipboard->put_html($htmlContent, $testUrl) . "\n";

// 4
echo "4. Get source URL after setting HTML: ";
$url = SYSTEM::$clipboard->get_source_url();
if ($url) {
    echo "Source URL: " . $url . "\n";
} else {
    echo "Source URL not received\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
