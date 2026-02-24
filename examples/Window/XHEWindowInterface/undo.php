<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Undo operation in Notepad application

// Step: Get the Notepad window interface
$windowText = "Notepad";
$visibly = false;
$mainWindow = true;
$childWindow = true;
$notepadWindow = WINDOW::$window->get_by_text($windowText, $visibly, $mainWindow, $childWindow);

// Step: Get the text area (first child element)
$childNumber = 0;
$notebook = $notepadWindow->get_child_by_number($childNumber);

// Step: Set focus to the text area
$focusResult = $notebook->focus();
if ($focusResult) {
    echo "Focus set to Notepad text area successfully\n";
} else {
    echo "Failed to set focus to Notepad text area\n";
}

// Step: Paste first text
$text1 = "text1\r\n";
$pasteResult1 = $notebook->paste($text1);
if ($pasteResult1) {
    echo "First text pasted successfully\n";
} else {
    echo "Failed to paste first text\n";
}

// Step: Paste second text
$text2 = "text2";
$pasteResult2 = $notebook->paste($text2);
if ($pasteResult2) {
    echo "Second text pasted successfully\n";
} else {
    echo "Failed to paste second text\n";
}
sleep(2);

// Example 1: Undo operation in Notepad
echo "Example 1: Undo operation in Notepad\n";
$undoResult = $notebook->undo();
if ($undoResult) {
    echo "Undo operation executed successfully\n";
} else {
    echo "Failed to execute undo operation\n";
}

// Quit the application
WINDOW::$app->quit();
?>