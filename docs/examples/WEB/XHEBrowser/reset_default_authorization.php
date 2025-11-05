<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the reset_default_authorization function

// First, set default authorization
$login = "testuser";
$password = "testpass123";
WEB::$browser->set_default_authorization($login, $password);

echo "Set default authorization: " . $login . "/" . $password;

// Navigate to a website
$url = "https://httpbin.org/basic-auth/testuser/testpass123";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nAuthorization is active";

// Reset default authorization
$result = WEB::$browser->reset_default_authorization();

// Display the result
if ($result) {
    echo "\n\nSuccessfully reset default authorization";
} else {
    echo "\n\nFailed to reset default authorization";
}

// Navigate again without authorization
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated again to: " . $url;
echo "\nNo authorization should be applied";

// Reset authorization again (should still work)
$result2 = WEB::$browser->reset_default_authorization();
echo "\n\nReset authorization again: " . ($result2 ? "Success" : "Failed");

// Остановить работу
WINDOW::$app->quit();
?>