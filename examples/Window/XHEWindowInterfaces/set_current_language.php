<?php
// Scenario: Setting the current language for text input to demonstrate multilingual input capabilities.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all windows with the text "Notepad"
$windowText = "Notepad";
$notepadWindows = WINDOW::$window->get_all_by_text($windowText);
if ($notepadWindows->count() > 0) {
    $targetNotepadWindow = $notepadWindows[0];
    echo "Found Notepad window.\n";
    
    // step 2: Bring the Notepad window to foreground
    echo "Bring Notepad window to foreground: ";
    $isForeground = $targetNotepadWindow->foreground();
    if ($isForeground) {
        echo "Notepad window brought to foreground successfully.\n";
        
        // step 3: Set focus to the Notepad window
        echo "Set focus to Notepad window: ";
        $isFocused = $targetNotepadWindow->focus();
        if ($isFocused) {
            echo "Focus set to Notepad window successfully.\n";
            
            // step 4: Define language codes
            $englishLanguageCode = "1033"; // English (United States)
            $russianLanguageCode = "1049"; // Russian
            echo "Language codes - English: $englishLanguageCode, Russian: $russianLanguageCode\n";
            
            // Example set_current_language: Set the current language to English
            echo "Example set_current_language: Set language to English: ";
            $isLanguageSetToEnglish = $targetNotepadWindow->set_current_language($englishLanguageCode);
            if ($isLanguageSetToEnglish) {
                echo "Language set to English successfully.\n";
                
                // step 5: Input English text
                $englishText = "This is English text input.";
                echo "Input English text: ";
                $isEnglishTextInput = $targetNotepadWindow->input($englishText);
                if ($isEnglishTextInput) {
                    echo "English text input successfully.\n";
                    
                    // step 6: Press Enter to move to the next line
                    echo "Press Enter: ";
                    $isEnterPressed = $targetNotepadWindow->key(13); // 13 is the virtual key code for Enter
                    if ($isEnterPressed) {
                        echo "Enter key pressed successfully.\n";
                        
                        // Example set_current_language: Set the current language to Russian
                        echo "Example set_current_language: Set language to Russian: ";
                        $isLanguageSetToRussian = $targetNotepadWindow->set_current_language($russianLanguageCode);
                        if ($isLanguageSetToRussian) {
                            echo "Language set to Russian successfully.\n";
                            
                            // step 7: Input Russian text
                            $russianText = "Это ввод текста на русском языке.";
                            echo "Input Russian text: ";
                            $isRussianTextInput = $targetNotepadWindow->input($russianText);
                            if ($isRussianTextInput) {
                                echo "Russian text input successfully.\n";
                            } else {
                                echo "Failed to input Russian text.\n";
                            }
                        } else {
                            echo "Failed to set language to Russian.\n";
                        }
                    } else {
                        echo "Failed to press Enter key.\n";
                    }
                } else {
                    echo "Failed to input English text.\n";
                }
            } else {
                echo "Failed to set language to English.\n";
            }
        } else {
            echo "Failed to set focus to Notepad window.\n";
        }
    } else {
        echo "Failed to bring Notepad window to foreground.\n";
    }
} else {
    echo "No Notepad window found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>