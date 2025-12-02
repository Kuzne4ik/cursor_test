<?php
// Scenario: Reset authorization, set default authorization credentials, navigate to authenticated site, then reset again to demonstrate set_default_authorization function
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_default_authorization function

// First, reset any existing authorization
WEB::$browser->reset_default_authorization();
echo "Reset existing authorization";

// Set default authorization credentials
$login = "testuser";
$password = "testpass123";
$result = WEB::$browser->set_default_authorization($login, $password);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set default authorization";
    echo "\nLogin: " . $login;
    echo "\nPassword: " . $password;
} else {
    echo "\n\nFailed to set default authorization";
}

// Navigate to a website that requires authentication
$url = "https://httpbin.org/basic-auth/testuser/testpass123";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nAuthorization should be applied automatically";

// Reset authorization again
WEB::$browser->reset_default_authorization();
echo "\n\nReset authorization";

// Navigate without authorization
$url2 = "https://httpbin.org/basic-auth/testuser/testpass123";
WEB::$browser->navigate($url2);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url2;
echo "\nNo authorization should be applied";

// Остановить работу
WINDOW::$app->quit();
?>