<?php
// Scenario: Show OCR verification dialog
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// step
$imagePath = "images/capcha_100_3.png";
$language = "eng";
$recognizedText = VISION::$tesseractOCR->recognize($imagePath, $language);

// Example 1
echo "1. Verify OCR recognition\n\n";
$dialogTitle = "Check recognition correctness";
$dialogText = "Text";
$verifyResult = WINDOW::$app->dlg_verify_ocr($imagePath, $recognizedText, $dialogTitle, $dialogText);
echo($verifyResult);

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>