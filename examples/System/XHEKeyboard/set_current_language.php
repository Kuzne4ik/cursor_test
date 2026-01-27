<?php
// Scenario: Demonstrates how to set and get current keyboard language

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1: Set keyboard language to English
echo "\n";

// Set variables for setting language to English
$langId = "00000409"; // English (US) language ID

// Set keyboard language to English
echo "1. Set keyboard language to English: ";
$result = SYSTEM::$keyboard->set_current_language($langId);
if ($result) {
    echo "Language set to English successfully\n";
} else {
    echo "Failed to set language to English\n";
}

echo "\n";

// Verify language change
echo "Verify language change: ";
$language = SYSTEM::$keyboard->get_current_language();
if ($language !== false) {
    echo "Current language: $language\n";
} else {
    echo "Failed to get current language\n";
}

// Example 2: Set keyboard language to Russian
echo "\n";

// Set variables for setting language to Russian
$langId = "00000419"; // Russian language ID

// Set keyboard language to Russian
echo "2. Set keyboard language to Russian: ";
$result = SYSTEM::$keyboard->set_current_language($langId);
if ($result) {
    echo "Language set to Russian successfully\n";
} else {
    echo "Failed to set language to Russian\n";
}

// Verify language change
echo "\n";

// Verify language change
echo "Verify language change: ";
$language = SYSTEM::$keyboard->get_current_language();
if ($language !== false) {
    echo "Current language: $language\n";
} else {
    echo "Failed to get current language\n";
}

// Example 3: Set keyboard language back to English
echo "\n";

// Set variables for setting language back to English
$langId = "00000409"; // English (US) language ID

// Set keyboard language back to English
echo "3. Set keyboard language back to English: ";
$result = SYSTEM::$keyboard->set_current_language($langId);
if ($result) {
    echo "Language set to English successfully\n";
} else {
    echo "Failed to set language to English\n";
}

// Verify language change
echo "\n";

// Verify language change
echo "Verify language change: ";
$language = SYSTEM::$keyboard->get_current_language();
if ($language !== false) {
    echo "Current language: $language\n";
} else {
    echo "Failed to get current language\n";
}

// Quit the application
WINDOW::$app->quit();
?>