<?php
// Scenario: Change the screen resolution
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Step: Get current screen resolution
echo "Get current screen resolution: ";
$currentWidth = WINDOW::$windows->get_screen_width();
echo $currentWidth . " x ";
$currentHeight = WINDOW::$windows->get_screen_height();
echo $currentHeight . "\n";

// Example 1: Set new screen resolution to 1024x768
$newWidth = 1024;
$newHeight = 768;
echo "\nSet new screen resolution to 1024x768: ";
$result1 = WINDOW::$windows->set_screen_resolution($newWidth, $newHeight);
if ($result1) {
    echo "Successfully set screen resolution to 1024x768\n";
} else {
    echo "Failed to set screen resolution to 1024x768\n";
}
sleep(6);

// Step: Verify new resolution
echo "\nVerify new resolution: ";
$verifyWidth = WINDOW::$windows->get_screen_width();
echo $verifyWidth . "x";
$verifyHeight = WINDOW::$windows->get_screen_height();
echo $verifyHeight . "\n";

// Pause
sleep(5);

// Example 2: Restore original screen resolution
echo "\nRestore original screen resolution: ";
$result2 = WINDOW::$windows->set_screen_resolution($currentWidth, $currentHeight);
if ($result2) {
    echo "Successfully restored original screen resolution\n";
} else {
    echo "Failed to restore original screen resolution\n";
}

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>