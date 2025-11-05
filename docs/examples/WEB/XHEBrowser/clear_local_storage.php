<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the clear_local_storage function

// Navigate to a website that uses local storage
$url = "https://www.wikipedia.org";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "Navigated to: " . $url;
echo "\nLocal storage should be present";

// Check if local storage is enabled
$local_storage_enabled = WEB::$browser->is_enable_dom_storage();
echo "\n\nLocal storage enabled: " . ($local_storage_enabled ? "Yes" : "No") . "\n";

// Enable local storage if not enabled
if (!$local_storage_enabled) {
    WEB::$browser->enable_dom_storage(true);
    echo "\nEnabled local storage";
}

// Clear local storage
$result = WEB::$browser->clear_local_storage();

// Display the result
if ($result) {
    echo "\n\nSuccessfully cleared local storage\n";
} else {
    echo "\n\nFailed to clear local storage\n";
}
// Остановить работу
WINDOW::$app->quit();
?>