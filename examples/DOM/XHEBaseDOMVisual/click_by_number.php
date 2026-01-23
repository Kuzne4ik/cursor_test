<?php
// Scenario: Demonstrates clicking a DOM element by number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with form elements
$pageUrl = TEST_POLYGON_URL . "image.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Click on the first image (number 0) on the page
$clickResult = DOM::$image->click_by_number(0);

if ($clickResult) {
    echo "Successfully clicked on image number 0\n";
} else {
    echo "Failed to click on image number 0\n";
}

// Check if the image exists before clicking
$imageExists = DOM::$image->is_exist_by_number(1);

if ($imageExists) {
    echo "image number 1 exists on the page\n";

    // Click on the second image (number 1) on the page
    $clickResult = DOM::$image->click_by_number(1);
    
    if ($clickResult) {
        echo "Successfully clicked on image number 1\n";
    } else {
        echo "Failed to click on image number 1\n";
    }
} else {
    echo "image number 1 does not exist on the page\n";
}

// Example with frame parameter - click on an image in frame 0
$frameExists = DOM::$frame->is_exist_by_number(0);

if ($frameExists) {
    echo "Frame 0 exists on the page\n";
    
    // Click on the first image (number 0) in frame 0
    $clickInFrameResult = DOM::$image->click_by_number(0, "0");
    
    if ($clickInFrameResult) {
        echo "Successfully clicked on image number 0 in frame 0\n";
    } else {
        echo "Failed to click on image number 0 in frame 0\n";
    }
} else {
    echo "Frame 0 does not exist on the page\n";
}

// Example with a different image number
$imageExists2 = DOM::$image->is_exist_by_number(2);

if ($imageExists2) {
    echo "image number 2 exists on the page\n";

    // Click on the third image (number 2) on the page
    $clickResult2 = DOM::$image->click_by_number(2);
    
    if ($clickResult2) {
        echo "Successfully clicked on image number 2\n";
    } else {
        echo "Failed to click on image number 2\n";
    }
} else {
    echo "image number 2 does not exist on the page\n";
}

// Quit the application
WINDOW::$app->quit();