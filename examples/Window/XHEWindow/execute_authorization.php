<?php
// Scenario: Execute authorization with default login and password

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Navigate to test page
$pageUrl = TEST_SITE_URL . "personal/myshopping/";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Set default login and password
$login = "login";
$password = "password";
echo("Example 1: Set default login and password\n");
$result = WINDOW::$window->execute_authorization($login, $password);
echo("Authorization result: " . ($result ? "Success" : "Failed") . "\n");

// Quit the application
WINDOW::$app->quit();
?>