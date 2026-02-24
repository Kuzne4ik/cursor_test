<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Set current language for keyboard input in Notepad application

// Step: Get the Notepad window interface
$windowText = "Notepad";
$visibly = false;
$notepadWindow = WINDOW::$window->get_by_text($windowText, $visibly);

// Example 1: Check if Notepad window exists
echo "Example 1: Check if Notepad window exists\n";
$existsResult = $notepadWindow->is_exist();
if ($existsResult) {
    echo "Notepad window exists\n";
} else {
    echo "Notepad window does not exist\n";
}

// Example 2: Set language to English and input text
echo "Example 2: Set language to English and input text\n";
$language1 = "en";
$setLanguageResult1 = $notepadWindow->set_current_language($language1);
if ($setLanguageResult1) {
    echo "Language set to English successfully\n";
} else {
    echo "Failed to set language to English\n";
}

$text1 = "abcd";
$keyResult1 = $notepadWindow->key($text1, true);
if ($keyResult1) {
    echo "English text input successfully\n";
} else {
    echo "Failed to input English text\n";
}
sleep(1);

// Example 3: Set language to Russian and input text
echo "Example 3: Set language to Russian and input text\n";
$language2 = "ru";
$setLanguageResult2 = $notepadWindow->set_current_language($language2);
if ($setLanguageResult2) {
    echo "Language set to Russian successfully\n";
} else {
    echo "Failed to set language to Russian\n";
}

$text2 = "абвгд";
$keyResult2 = $notepadWindow->key($text2);
if ($keyResult2) {
    echo "Russian text input successfully\n";
} else {
    echo "Failed to input Russian text\n";
}
sleep(1);

// Quit the application
WINDOW::$app->quit();
?>