<?php
// Scenario: Display a custom dialog based on XML configuration and return input as array or XML
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Step 1
echo "\nStep 1. Read file with XML dialog element layout\n";
$xmlFilePath = "xml\\2.xml";
$xml = $textfile->read_file($xmlFilePath, 60);
echo strlen($xml)."\n";

// Example 1
echo "\n\n2. Show dialog and return input as array\n";
$asArray = true;
$showFreeDlgArrayResult = WINDOW::$app->show_free_dlg($xml, $asArray);
echo $showFreeDlgArrayResult."\n";

// Example 2
echo "\n\n3. Show dialog and return input as XML\n";
$asArray = false;
$showFreeDlgXmlResult = WINDOW::$app->show_free_dlg($xml, $asArray);
echo $showFreeDlgXmlResult."\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>