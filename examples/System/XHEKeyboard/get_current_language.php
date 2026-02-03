<?php
// Scenario: Demonstrates how to get and set the current keyboard language

$xhe_host = "127.0.0.1:7011";
// Connect functional objects if not already connected
if (!isset($path)){
  $path="../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >keyboard->" . basename (__FILE__) . "</span>\n";

// Example 1: Set keyboard language to Russian
echo "\n\n";

// Set variables for setting language
$language = "ru";

// Set the keyboard language
echo "1. Set keyboard language to '$language': ";
$result = SYSTEM::$keyboard->set_current_language($language);
if ($result) {
    echo "Language set successfully\n";
} else {
    echo "Failed to set language\n";
}

// Get the current keyboard language
echo "Get current keyboard language: ";
$currentLanguage = SYSTEM::$keyboard->get_current_language();
if ($currentLanguage !== false) {
    echo "Current language: $currentLanguage\n";
} else {
    echo "Failed to get current language\n";
}

// Example 2: Set keyboard language to English
echo "\n";

// Set variables for setting language
$language = "en";

// Set the keyboard language
echo "2. Set keyboard language to '$language': ";
$result = SYSTEM::$keyboard->set_current_language($language);
if ($result) {
    echo "Language set successfully\n";
} else {
    echo "Failed to set language\n";
}

// Get the current keyboard language
echo "Get current keyboard language: ";
$currentLanguage = SYSTEM::$keyboard->get_current_language();
if ($currentLanguage !== false) {
    echo "Current language: $currentLanguage\n";
} else {
    echo "Failed to get current language\n";
}

// Example 5: Set keyboard language to German
echo "\n";

// Set variables for setting language
$language = "de";

// Set the keyboard language
echo "5. Set keyboard language to '$language': ";
$result = SYSTEM::$keyboard->set_current_language($language);
if ($result) {
    echo "Language set successfully\n";
} else {
    echo "Failed to set language\n";
}

// Get the current keyboard language
echo "Get current keyboard language: ";
$currentLanguage = SYSTEM::$keyboard->get_current_language();
if ($currentLanguage !== false) {
    echo "Current language: $currentLanguage\n";
} else {
    echo "Failed to get current language\n";
}

// Example 6: Set keyboard language to French
echo "\n";

// Set variables for setting language
$language = "fr";

// Set the keyboard language
echo "6. Set keyboard language to '$language': ";
$result = SYSTEM::$keyboard->set_current_language($language);
if ($result) {
    echo "Language set successfully\n";
} else {
    echo "Failed to set language\n";
}
// Get the current keyboard language
echo "Get current keyboard language: ";
$currentLanguage = SYSTEM::$keyboard->get_current_language();
if ($currentLanguage !== false) {
    echo "Current language: $currentLanguage\n";
} else {
    echo "Failed to get current language\n";
}

// Quit the application
WINDOW::$app->quit();
?>