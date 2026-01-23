<?php
// Scenario: Set internationalization for English, Russian, Chinese, and Japanese to demonstrate set_internationalization function
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the set_internationalization function


// Set internationalization for English (US)
$locale = "en";
$timeZone = "America/New_York";
$calendar = "gregorian";
$result = WEB::$browser->set_internationalization($locale, $timeZone, $calendar);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set internationalization";
    echo "\nLocale: " . $locale;
    echo "\nTime Zone: " . $timeZone;
    echo "\nCalendar: " . $calendar;
} else {
    echo "\n\nFailed to set internationalization";
}

// Set internationalization for Russian
$locale2 = "ru";
$timeZone2 = "Europe/Moscow";
$calendar2 = "gregorian";
$result2 = WEB::$browser->set_internationalization($locale2, $timeZone2, $calendar2);

echo "\n\nSet internationalization for Russian: " . ($result2 ? "Success" : "Failed");

// Set internationalization for Chinese
$locale3 = "zh";
$timeZone3 = "Asia/Shanghai";
$calendar3 = "gregorian";
$result3 = WEB::$browser->set_internationalization($locale3, $timeZone3, $calendar3);

echo "\nSet internationalization for Chinese: " . ($result3 ? "Success" : "Failed");

// Set internationalization for Japanese
$locale4 = "ja";
$timeZone4 = "Asia/Tokyo";
$calendar4 = "gregorian";
$result4 = WEB::$browser->set_internationalization($locale4, $timeZone4, $calendar4);

echo "\nSet internationalization for Japanese: " . ($result4 ? "Success" : "Failed");

// Set internationalization by default
$result5 = WEB::$browser->set_internationalization();

echo "\nSet internationalization for German: " . ($result5 ? "Success" : "Failed");


// Quit the application
WINDOW::$app->quit();
?>