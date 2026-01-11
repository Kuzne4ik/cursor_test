<?php
// Scenario: Set language to English USA, then to Russian to demonstrate set_language function
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the set_language function

// Set language to English USA
$language_en = "en-US";
$result = WEB::$browser->set_language($language_en);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set language to English";
    echo "\nLanguage: " . $language_en;
} else {
    echo "\n\nFailed to set language";
}

// Set language to Russian
$language_ru = "ru-RU";
$result2 = WEB::$browser->set_language($language_ru);

echo "\n\nSet language to Russian: " . ($result2 ? "Success" : "Failed");

// Остановить работу
WINDOW::$app->quit();
?>