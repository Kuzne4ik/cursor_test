<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_cache_folder function

// Get current cache folder
$cache_folder = WEB::$browser->get_cache_folder();
echo "Current cache folder: " . $cache_folder;

// Navigate to a website to generate some cache
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "\n\nNavigated to: " . $url;
echo "\nCache should be saved to: " . $cache_folder;

// Set a custom cache folder
$custom_folder = "./my_cache";
$result = WEB::$browser->set_cache_folder($custom_folder);

if ($result) {
    echo "\n\nSuccessfully set cache folder to: " . $custom_folder;
    
    // Verify the change
    $updated_folder = WEB::$browser->get_cache_folder();
    echo "\nUpdated cache folder: " . $updated_folder;
    
    // Navigate again to test the new folder
    WEB::$browser->navigate($url);
    WEB::$browser->wait(3);
    
    echo "\n\nNavigated again to: " . $url;
    echo "\nCache should now be saved to: " . $updated_folder;
} else {
    echo "\n\nFailed to set cache folder";
}

// Reset to default cache folder
WEB::$browser->set_cache_folder("");
$default_folder = WEB::$browser->get_cache_folder();
echo "\n\nReset to default cache folder: " . $default_folder;

// Остановить работу
WINDOW::$app->quit();
?>