<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the flash_cookies_save function

// First, navigate to a website that uses Flash cookies
$url = "https://www.youtube.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;
echo "\nFlash cookies should be present";

// Save Flash cookies to a folder
$folder = "./flash_cookies_backup";
$site = "youtube.com"; // Optional: specify site to save cookies for
$result = WEB::$browser->flash_cookies_save($folder, $site);

// Display the result
if ($result) {
    echo "\n\nSuccessfully saved Flash cookies to: " . $folder;
    echo "\nSite: " . ($site ?: "All sites");
} else {
    echo "\n\nFailed to save Flash cookies";
}

// Save Flash cookies for all sites
$folder2 = "./flash_cookies_all";
$result2 = WEB::$browser->flash_cookies_save($folder2, "");

echo "\n\nSaved Flash cookies for all sites to: " . $folder2;
echo "\nResult: " . ($result2 ? "Success" : "Failed");

// Quit the application
WINDOW::$app->quit();
?>