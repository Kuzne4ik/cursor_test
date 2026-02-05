<?php
// Scenario: Save tab content to a file
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Step: Set tab content before saving
$tabName = "Extended Info";
$content = "Test content to save to file";
echo "Step: Set tab content\n";
WINDOW::$debug->set_tab_content($tabName, $content);

// Pause to see the content
sleep(2);

// Example 1: Save tab content to file (overwrite)
echo "\n\nExample 1: Save tab content to file (overwrite)\n";
$filePath = "c:\\text.html";
$result = WINDOW::$debug->save_tab_content_to_file($tabName, $filePath);
if ($result)
    echo "Tab content saved successfully to $filePath\n";
else
    echo "Failed to save tab content to $filePath\n";

// Step: Display the file content
echo "\nStep: Display the file content\n";
WINDOW::$app->shell_execute("open", $filePath, "", "", true);

// Step: Copy the file for append example
$copyFilePath = "c:\\text1.html";
SYSTEM::$file_os->copy($filePath, $copyFilePath, false);

// Example 2: Save tab content to file (append)
echo "\n\nExample 2: Save tab content to file (append)\n";
$appendResult = WINDOW::$debug->save_tab_content_to_file($tabName, $copyFilePath, true);
if ($appendResult)
    echo "Tab content appended successfully to $copyFilePath\n";
else
    echo "Failed to append tab content to $copyFilePath\n";

// Step: Display the appended file content
echo "\nStep: Display the appended file content\n";
WINDOW::$app->shell_execute("open", $copyFilePath, "", "", true);

// Step: Switch to debug tab
echo "\nStep: Switch to debug tab\n";
$debugTabName = "Отладка";
WINDOW::$debug->open_tab($debugTabName);

// Quit the application
WINDOW::$app->quit();
?>