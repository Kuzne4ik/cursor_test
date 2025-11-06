<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the flash_cookies_delete function

// First, navigate to a website that uses Flash cookies
$url = "https://www.youtube.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "Navigated to: " . $url;
echo "\nFlash cookies should be present";

// Delete Flash cookies for a specific site
$site = "youtube.com";
$result = WEB::$browser->flash_cookies_delete($site);

// Display the result
if ($result) {
    echo "\n\nSuccessfully deleted Flash cookies for site: " . $site;
} else {
    echo "\n\nFailed to delete Flash cookies for site: " . $site;
}

// Navigate again to test if cookies are deleted
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated again to: " . $url;
echo "\nFlash cookies for " . $site . " should be deleted";

// Delete Flash cookies for all sites
$result2 = WEB::$browser->flash_cookies_delete("");

echo "\n\nDeleted Flash cookies for all sites";
echo "\nResult: " . ($result2 ? "Success" : "Failed");

// Navigate again to test if all cookies are deleted
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "\n\nNavigated again to: " . $url;
echo "\nAll Flash cookies should be deleted";

// Quit the application
WINDOW::$app->quit();
?>