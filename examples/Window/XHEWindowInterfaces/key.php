<?php
// Scenario: Sending a key press to a window element (e.g., Enter key after inputting text).
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all windows with the text "localhost"
$windowText = "localhost";
$targetWindows = WINDOW::$window->get_all_by_text($windowText, false);
if ($targetWindows->count() > 0) {
    $targetWindow = $targetWindows[0];
    echo "Found window with text: '$windowText'.\n";
    
    // step 2: Get the navigation field from the window
    $childIndex1 = 0;
    $firstChild = $targetWindow->get_child_by_number($childIndex1);
    if ($firstChild->is_exist()) {
        echo "Got first child window.\n";
        
        $className1 = "XTPToolBar";
        $toolbarChild = $firstChild->get_child_by_class($className1);
        if ($toolbarChild->is_exist()) {
            echo "Got toolbar child window.\n";
            
            $className2 = "RichEdit";
            $navigateField = $toolbarChild->get_child_by_class($className2);
            if ($navigateField->is_exist()) {
                echo "Got navigation field.\n";
                
                // step 3: Input text into the navigation field
                $inputText = "ya.ru";
                echo "Step: Input text into navigation field: ";
                $inputSuccess = $navigateField->input($inputText);
                if ($inputSuccess) {
                    echo "Text input successfully.\n";
                    sleep(1);
                    
                    // Example key: Send Enter key (key code 13)
                    echo "Example key: Send Enter key (key code 13): ";
                    $keyCode = 13; // Enter key
                    $keySent = $navigateField->key($keyCode);
                    if ($keySent) {
                        echo "Enter key sent successfully.\n";
                    } else {
                        echo "Failed to send Enter key.\n";
                    }
                    sleep(1);
                } else {
                    echo "Failed to input text.\n";
                }
            } else {
                echo "Navigation field not found.\n";
            }
        } else {
            echo "Toolbar child window not found.\n";
        }
    } else {
        echo "First child window not found.\n";
    }
} else {
    echo "No window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>