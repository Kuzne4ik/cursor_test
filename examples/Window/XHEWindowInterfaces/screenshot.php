<?php
// Scenario: Taking screenshots of applications and parts of applications to demonstrate screenshot functionality.
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
    
    // Get window coordinates
    $windowX = $targetNotepadWindow->get_x();
    $windowY = $targetNotepadWindow->get_y();
    $windowWidth = $targetNotepadWindow->get_width();
    $windowHeight = $targetNotepadWindow->get_height();
    echo "Notepad window coordinates: X=$windowX, Y=$windowY, Width=$windowWidth, Height=$windowHeight\n";
    
    // step 2: Define screenshot file path
    $screenshotPath = "notepad_screenshot.png";
    echo "Screenshot will be saved to: $screenshotPath\n";
    
    // Example screenshot: Take a screenshot of the entire Notepad window
    echo "Example screenshot: Take screenshot of entire Notepad window: ";
    $isScreenshotTaken = $targetNotepadWindow->screenshot($screenshotPath);
    if ($isScreenshotTaken) {
        echo "Screenshot of Notepad window saved successfully.\n";
        
        // step 3: Open the screenshot to verify it was captured correctly
        echo "Open screenshot file: ";
        $isScreenshotOpened = WEB::$browser->navigate("file://" . realpath($screenshotPath));
        if ($isScreenshotOpened) {
            echo "Screenshot file opened successfully.\n";
            
            // Wait a moment to view the screenshot
            sleep(2);
            echo "Screenshot displayed for 2 seconds.\n";
            
            // step 4: Take a screenshot of a specific region within the Notepad window
            $regionX = $windowX + 10; // 10 pixels from the left edge
            $regionY = $windowY + 10; // 10 pixels from the top edge
            $regionWidth = $windowWidth - 20; // 20 pixels less than window width
            $regionHeight = $windowHeight - 20; // 20 pixels less than window height
            $regionScreenshotPath = "notepad_region_screenshot.png";
            
            echo "Take screenshot of region within Notepad window: ";
            $isRegionScreenshotTaken = $targetNotepadWindow->screenshot($regionScreenshotPath, $regionX, $regionY, $regionWidth, $regionHeight);
            if ($isRegionScreenshotTaken) {
                echo "Screenshot of region within Notepad window saved successfully.\n";
                
                // step 5: Open the region screenshot to verify it was captured correctly
                echo "Open region screenshot file: ";
                $isRegionScreenshotOpened = WEB::$browser->navigate("file://" . realpath($regionScreenshotPath));
                if ($isRegionScreenshotOpened) {
                    echo "Region screenshot file opened successfully.\n";
                } else {
                    echo "Failed to open region screenshot file.\n";
                }
            } else {
                echo "Failed to take screenshot of region within Notepad window.\n";
            }
        } else {
            echo "Failed to open screenshot file.\n";
        }
    } else {
        echo "Failed to take screenshot of Notepad window.\n";
    }
} else {
    echo "No Notepad window found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>