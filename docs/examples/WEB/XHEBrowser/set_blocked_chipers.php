<?php
// Scenario: Set blocked cipher suites to block specific TLS ciphers to demonstrate set_blocked_chipers function
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_blocked_chipers function

// Note: Cipher Suites can find at this: link https://browserleaks.com/tls
// Set blocked ciphers (example: block TLS 1.0,1.1,1.2)
$blocked_ciphers = "0xc00a";
$result = WEB::$browser->set_blocked_chipers($blocked_ciphers);

// Display the result
if ($result) {
    echo "Successfully set blocked ciphers";
    echo "\nBlocked ciphers: " . $blocked_ciphers;
} else {
    echo "Failed to set blocked ciphers";
}

// Note: The cipher names should match the browser's supported cipher suites
// This is an example - actual cipher names may vary depending on the browser

// Quit the application
WINDOW::$app->quit();
?>