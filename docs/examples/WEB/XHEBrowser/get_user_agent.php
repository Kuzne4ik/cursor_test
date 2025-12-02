<?php
// Scenario: Get the current user agent string
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_user_agent function

// Get current user agent
$user_agent = WEB::$browser->get_user_agent();
echo "Current user agent: " . $user_agent;

// Остановить работу
WINDOW::$app->quit();
?>