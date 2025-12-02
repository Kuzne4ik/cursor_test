<?php
// Scenario: Enabling and disabling security problem dialogs in browser
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the disable_security_problem_dialogs function

// Enable show security problem dialogs (disable = false)
$result = WEB::$browser->disable_security_problem_dialogs(false);

echo "\n\nShow security problem dialogs set enabled: " . ($result ? "Yes" : "No") . "\n";

// Navigate to a website that might trigger security warnings
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(2);

echo "\n\nNavigated to: " . $url;

// Disable show security problem dialogs (disable = true)
$result2 = WEB::$browser->disable_security_problem_dialogs(true);

// Display the result
echo "\n\nShow security problem dialogs set disabled: " . ($result2? "Yes" : "No") . "\n";

// Остановить работу
WINDOW::$app->quit();
?>