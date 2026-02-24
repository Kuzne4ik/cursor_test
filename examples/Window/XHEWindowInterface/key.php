<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Send key commands to Notepad application
echo "\n";

// Step: Define parameters for finding Notepad window
$windowClass = "Notepad";
$visibly = true;
$mainWindow = true;
$childWindow = true;
$iterationCount = 2;

// Loop for demonstration
$n = 0;
while ($n < $iterationCount) {
    // Step: Find the Notepad application window by class property
    $notepad = WINDOW::$window->get_by_class($windowClass, $visibly, $mainWindow, $childWindow);
    
    if ($notepad->inner_number != -1) {
        // Step: Bring the application above all other windows
        $foregroundResult = $notepad->foreground();
        
        // Step: Get the text area (first child element)
        $childNumber = 0;
        $textArea = $notepad->get_child_by_number($childNumber);
        
        // Example 1: Paste from clipboard using 'v + Ctrl' (v as a character)
        echo "Example 1: Paste from clipboard using 'v + Ctrl' (v as a character)\n";
        $key1 = "v";
        $isCtrl1 = false;
        $isAlt1 = true;
        $keyResult1 = $textArea->key($key1, $isCtrl1, $isAlt1);
        if ($keyResult1) {
            echo "Key command executed successfully\n";
        } else {
            echo "Failed to execute key command\n";
        }
        sleep(1);
    
        // Example 2: Press space key using Alt code 32
        echo "Example 2: Press space key using Alt code 32\n";
        $keyCode2 = 32;
        $isAlt2 = true;
        $keyResult2 = $notepad->key($keyCode2, $isAlt2);
        if ($keyResult2) {
            echo "Key command executed successfully\n";
        } else {
            echo "Failed to execute key command\n";
        }
        sleep(1);
        
        // Example 3: Press 'p' key as a character
        echo "Example 3: Press 'p' key as a character\n";
        $key3 = "p";
        $isCtrl3 = false;
        $isAlt3 = false;
        $keyResult3 = $textArea->key($key3, $isCtrl3, $isAlt3);
        if ($keyResult3) {
            echo "Key command executed successfully\n";
        } else {
            echo "Failed to execute key command\n";
        }
    
        // Example 4: Open print dialog using 'p + Ctrl' (p as a character)
        echo "Example 4: Open print dialog using 'p + Ctrl' (p as a character)\n";
        $key4 = "p";
        $isCtrl4 = false;
        $isAlt4 = true;
        $keyResult4 = $textArea->key($key4, $isCtrl4, $isAlt4);
        if ($keyResult4) {
            echo "Key command executed successfully\n";
        } else {
            echo "Failed to execute key command\n";
        }
        sleep(1);

        // Example 5: Close print dialog by pressing ESC using Alt code 27
        echo "Example 5: Close print dialog by pressing ESC using Alt code 27\n";
        $printDialogText = "Печать";
        $printDialog = WINDOW::$window->get_by_text($printDialogText, false, false, true);
        $keyCode5 = "27";
        $isAlt5 = true;
        $keyResult5 = $printDialog->key($keyCode5, $isAlt5);
        if ($keyResult5) {
            echo "Key command executed successfully\n";
        } else {
            echo "Failed to execute key command\n";
        }
        sleep(1);
    }
    else {
        echo "Notepad application window not found\n";
    }
    
    $n++;
}

// Quit the application
WINDOW::$app->quit();
?>