<?php
// Scenario: Cancel user impersonation and restore original security context
$xhe_host = "127.0.0.1:7026";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Step 1
echo "\nStep 1. Set user credentials for impersonation\n";
$login = 'dell';
$password = '997199';
$domain = '';
$networkPath = '\\\\FOZZY-LAPTOP\\Share';

// Example 1
echo "\n\n1. Add user impersonation for network folder access\n";
$impersonateUserResult = WINDOW::$app->impersonate_user($login, $password, $domain);
if ($impersonateUserResult)
    echo "User impersonation enabled successfully\n";
else
    echo "Failed to enable user impersonation\n";

// Step 2
echo "\nStep 2. Get folder contents with impersonation\n";
$folderItems = $folder->get_all_items($networkPath);
var_export($folderItems);

// Example 2
echo "\n\n2. Cancel user impersonation\n";
$undoImpersonateUserResult = WINDOW::$app->undo_impersonate_user();
if ($undoImpersonateUserResult)
    echo "User impersonation cancelled successfully\n";
else
    echo "Failed to cancel user impersonation\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>