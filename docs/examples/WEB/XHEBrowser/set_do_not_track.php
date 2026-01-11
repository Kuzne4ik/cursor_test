<?php
// Scenario: Enable Do Not Track, then disable it to demonstrate set_do_not_track function
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the set_do_not_track function

// Enable Do Not Track
$result = WEB::$browser->set_do_not_track(true);

// Display the result
if ($result) {
    echo "Successfully enabled Do Not Track";
} else {
    echo "Failed to enable Do Not Track";
}

// Disable Do Not Track
$result2 = WEB::$browser->set_do_not_track(false);

echo "\n\nDo Not Track disabled: " . ($result2 ? "Yes" : "No");


// Остановить работу
WINDOW::$app->quit();
?>