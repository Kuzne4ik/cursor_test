<?php
// Scenario: Set Google default client ID for OAuth authentication to demonstrate set_google_default_client_id function
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_google_default_client_id function

// Set Google default client ID
$client_id = "your_google_client_id_here";
$result = WEB::$browser->set_google_default_client_id($client_id);

// Display the result
if ($result) {
    echo "Successfully set Google default client ID";
} else {
    echo "Failed to set Google default client ID";
}

// Note: Replace "your_google_client_id_here" with your actual Google client ID
// This is typically used for Google OAuth authentication

// Остановить работу
WINDOW::$app->quit();
?>