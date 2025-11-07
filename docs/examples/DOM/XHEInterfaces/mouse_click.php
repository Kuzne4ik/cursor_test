<?php

// Scenario: Click on elements in a collection using mouse events
// Description: This example demonstrates how to get a collection of elements and click on each element using mouse events
// Classes used: XHEInterfaces, XHEAnchor, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example: Get all anchor elements and click on each element using mouse events

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Process each anchor to click on it
    for ($i = 0; $i < $anchors->count(); $i++)
    {
        // Get the current anchor
        $currentAnchor = $anchors->get($i);
        
        // Check that the element exists
        if ($currentAnchor && $currentAnchor->is_exist())
        {
            echo "\nProcessing anchor #" . ($i + 1) . "\n";
            echo "Anchor href: " . $currentAnchor->get_href() . "\n";
            echo "Anchor inner text: " . $currentAnchor->get_inner_text() . "\n";
            
            // Get the coordinates of the element
            $x = $currentAnchor->get_x();
            $y = $currentAnchor->get_y();
            echo "Element coordinates: X=" . $x . ", Y=" . $y . "\n";

            $moveResult = true;
            // Move the mouse to the element first
            //$moveResult = $currentAnchor->mouse_move_to();
            
            if ($moveResult)
            {
                echo "Successfully moved mouse to anchor #" . ($i + 1) . "\n";
                
                // Click on the element with default settings
                $clickResult = $currentAnchor->mouse_click();
                
                // Check if the click was successful
                if ($clickResult)
                {
                    echo "Successfully clicked on anchor #" . ($i + 1) . "\n";
                    
                    // Wait a moment to see the result
                    sleep(2);
                    
                    // Go back to the original page
                    WEB::$browser->go_back();
                    
                    // Wait for the page to load
                    sleep(1);
                    
                    // Get the anchors again since the page might have changed
                    $anchors = DOM::$anchor->get_all();
                    
                    // Check if we still have anchors
                    if ($anchors->count() == 0)
                    {
                        echo "No more anchors found after navigation\n";
                        break;
                    }
                    
                    // Get the current anchor again
                    if ($i < $anchors->count())
                    {
                        $currentAnchor = $anchors->get($i);
                    }
                    else
                    {
                        echo "Anchor index out of bounds after navigation\n";
                        break;
                    }
                }
                else
                {
                    echo "Failed to click on anchor #" . ($i + 1) . "\n";
                }
            }
            else
            {
                echo "Failed to move mouse to anchor #" . ($i + 1) . "\n";
            }

        }
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>