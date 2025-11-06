<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the flash_cookies_restore function

// First, save Flash cookies
$folder = "./flash_cookies_backup";
WEB::$browser->flash_cookies_save($folder, "");
echo "Saved Flash cookies to: " . $folder;

// Navigate to a website
$url = "https://www.youtube.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "\n\nNavigated to: " . $url;

// Restore Flash cookies from the saved folder
$result = WEB::$browser->flash_cookies_restore($folder, "");

// Display the result
if ($result) {
    echo "\n\nSuccessfully restored Flash cookies from: " . $folder;
    echo "\nSite: All sites";
} else {
    echo "\n\nFailed to restore Flash cookies";
}

// Restore Flash cookies for a specific site
$site = "youtube.com";
$result2 = WEB::$browser->flash_cookies_restore($folder, $site);

echo "\n\nRestored Flash cookies for site: " . $site;
echo "\nResult: " . ($result2 ? "Success" : "Failed");

// Navigate again to test the restored cookies
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "\n\nNavigated again to: " . $url;
echo "\nFlash cookies should be restored";

// Quit the application
WINDOW::$app->quit();
?>