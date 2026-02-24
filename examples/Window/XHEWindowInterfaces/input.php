<?php
// Scenario: Inputting text into a navigation field and pressing Enter.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get XHE window by text
$windowText = "localhost";
$xheWindows = WINDOW::$window->get_all_by_text($windowText, false);
if ($xheWindows->count() > 0) {
    $xheWindow = $xheWindows[0];
    echo "Found XHE window with text: '$windowText'.\n";
    
    // step 2: Get first child window by number
    $childNumber = 0;
    $firstChild = $xheWindow->get_child_by_number($childNumber);
    if ($firstChild->is_exist()) {
        echo "Found first child window with number: $childNumber.\n";
        
        // step 3: Get toolbar child window by class name
        $toolbarClassName = "XTPToolBar";
        $toolbar = $firstChild->get_child_by_class($toolbarClassName);
        if ($toolbar->is_exist()) {
            echo "Found toolbar with class: '$toolbarClassName'.\n";
            
            // step 4: Get RichEdit child window by class name
            $richEditClassName = "RichEdit";
            $navigateField = $toolbar->get_child_by_class($richEditClassName);
            if ($navigateField->is_exist()) {
                echo "Found RichEdit field with class: '$richEditClassName'.\n";
                
                // Example input: Input text into the navigation field
                echo "Example input: Input text into navigation field: ";
                $inputText = "ya.ru";
                $isInputSuccess = $navigateField->input($inputText);
                if ($isInputSuccess) {
                    echo "Successfully input text: '$inputText'\n";
                    sleep(1);
                    
                    // Example key: Press Enter key
                    echo "Example key: Press Enter key: ";
                    $keyCode = 13; // Enter key code
                    $isKeyPressed = $navigateField->key($keyCode);
                    if ($isKeyPressed) {
                        echo "Successfully pressed Enter key.\n";
                    } else {
                        echo "Failed to press Enter key.\n";
                    }
                    sleep(1);
                } else {
                    echo "Failed to input text into navigation field.\n";
                }
            } else {
                echo "RichEdit field not found.\n";
            }
        } else {
            echo "Toolbar not found.\n";
        }
    } else {
        echo "First child window not found.\n";
    }
} else {
    echo "No XHE window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>