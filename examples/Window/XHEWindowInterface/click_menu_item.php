<?php
// Scenario: Click menu items in Notepad application
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Launch Notepad application
$notepadPath = "C:\\windows\\notepad.exe";
WINDOW::$app->shell_execute("open", $notepadPath);
sleep(1);

// Step: Get Notepad window interface
$windowText = "Notepad";
$notepadWindow = WINDOW::$window->get_by_text($windowText, false, true);

// Example 1: Click Print menu item
$menuPath1 = "0:7";
echo "Example 1: Click Print menu item\n";
$clickResult1 = $notepadWindow->click_menu_item($menuPath1);
if ($clickResult1) {
    echo "Print menu item clicked successfully\n";
} else {
    echo "Failed to click Print menu item\n";
}

// Example 2: Click Format:Font menu item
$menuPath2 = "Format:Font";
echo "Example 2: Click Format:Font menu item\n";
$clickResult2 = $notepadWindow->click_menu_item($menuPath2);
if ($clickResult2) {
    echo "Format:Font menu item clicked successfully\n";
} else {
    echo "Failed to click Format:Font menu item\n";
}

// Quit the application
WINDOW::$app->quit();
?>