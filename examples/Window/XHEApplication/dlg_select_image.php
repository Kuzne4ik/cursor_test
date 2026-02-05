<?php
// Scenario: Show image selection dialog
$xhe_host = "127.0.0.1:7010";
if (!isset($path)) {
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename(__FILE__) . "</font>\n";

// Example 1
echo "1. Select one image\n";
$imageFolder = "images";
$dialogText = "Text 1";
$dialogCaption = "Caption 1";
$selectResult1 = WINDOW::$app->dlg_select_image($imageFolder, $dialogText, $dialogCaption);
echo ($selectResult1);

// Example 2
echo "\n\n2. Select multiple images\n";
$imageFolder = "images";
$dialogText = "Text 1";
$dialogCaption = "Caption 1";
$allowMultiple = true;
$selectResult2 = WINDOW::$app->dlg_select_image($imageFolder, $dialogText, $dialogCaption, $allowMultiple);
if ($selectResult2 == "")
    echo "not selected";
else
    var_export(json_decode($selectResult2));

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
