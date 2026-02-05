<?php
// Scenario: Impersonate user for network access
$xhe_host = "127.0.0.1:7010";
if (!isset($path)) {
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename(__FILE__) . "</font>\n";

// step
$login = 'xxx';
$pass = 'xxx';
$domain = 'x';
$networkPath = '\\\\xxx\\xx';

// Example 1
echo "1. Add user impersonation for access to network folder\n";
$impersonateResult = WINDOW::$app->impersonate_user($login, $pass, $domain);
if ($impersonateResult)
    echo "User impersonation enabled successfully\n";
else
    echo "Failed to enable user impersonation\n";

// step
echo "2. Get what's in the network folder\n";
$folderItems = SYSTEM::$folder->get_all_items($networkPath);
var_export($folderItems);

// Example 2
echo "\n\n3. Cancel user impersonation\n";
$undoResult = WINDOW::$app->undo_impersonate_user();
if ($undoResult)
    echo "User impersonation cancelled successfully\n";
else
    echo "Failed to cancel user impersonation\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
