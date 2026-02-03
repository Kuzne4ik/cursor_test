<?php

// Scenario: Get child element by XPath from a collection
// Description: This example demonstrates how to get a collection of elements and then find a child element using XPath
// Classes used: XHEInterfaces, XHEDiv, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "divs.html");

// Example: Get all div elements and then find a child element using XPath

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";

    // Try to find a child element using a simple XPath expression
    $xpath = "./*[1]";
    $children = $divs->get_child_by_xpath($xpath);

    if (count($children) > 0) {
        $childrenCount = count($children);
        echo "For Iterate for each div element in results\n";

        for ($k = 0; $k < $childrenCount; $k++) {
            $child = $children[$k];
            echo "\nFor div element number " . ($k + 1) ." in results: \n";
            if ($child->is_exist()) {
                echo "Found child with XPath '$xpath':\n";
                echo "  Tag: " . $child->get_tag() . "\n";
                echo "  ID: " . $child->get_id() . "\n";
                echo "  Class: " . $child->get_attribute("class") . "\n";
                echo "  Inner text: " . $child->get_inner_text() . "\n";
                
                // Add a new attribute to the child
                $attrResult = $child->set_attribute("data-first-xpath-child", ($k + 1));
                
                if ($attrResult) {
                    echo "  Successfully added data-first-xpath-child attribute to child\n";
                } else {
                    echo "  Failed to add data-first-xpath-child attribute to child\n";
                }
            } else {
                echo "No child found with XPath '$xpath'\n";
            }
        }
    } else {
        echo "No children found with XPath '$xpath'\n";
    }
    
    // Try to find a child element using a specific tag XPath expression
    $spanXpath = "./span";
    $spanChildren = $divs->get_child_by_xpath($spanXpath);

    if (count($spanChildren) > 0) {
        $spanChildrenCount = count($spanChildren);
        echo "\nFor Iterate for each div element in results\n";

        for ($k = 0; $k < $spanChildrenCount; $k++) {
            $spanChild = $spanChildren[$k];
            echo "\nFor div element number " . ($k + 1) ." in results: \n";
            if ($spanChild->is_exist()) {
                echo "Found span child with XPath '$spanXpath':\n";
                echo "  Tag: " . $spanChild->get_tag() . "\n";
                echo "  ID: " . $spanChild->get_id() . "\n";
                echo "  Class: " . $spanChild->get_attribute("class") . "\n";
                echo "  Inner text: " . $spanChild->get_inner_text() . "\n";
                
                // Add a new attribute to the child
                $attrResult = $spanChild->set_attribute("data-span-xpath-child", ($k + 1));
                
                if ($attrResult) {
                    echo "  Successfully added data-span-xpath-child attribute to child\n";
                } else {
                    echo "  Failed to add data-span-xpath-child attribute to child\n";
                }
            } else {
                echo "No span child found with XPath '$spanXpath'\n";
            }
        }
    } else {
        echo "\nNo span children found with XPath '$spanXpath'\n";
    }
    
    // Try to find a child element using an attribute XPath expression
    $attrXpath = ".//*[@class]";
    $attrChildren = $divs->get_child_by_xpath($attrXpath);

    if (count($attrChildren) > 0) {
        $attrChildrenCount = count($attrChildren);
        echo "\nFor Iterate for each div element in results\n";

        for ($k = 0; $k < $attrChildrenCount; $k++) {
            $attrChild = $attrChildren[$k];
            echo "\nFor div element number " . ($k + 1) ." in results: \n";
            if ($attrChild->is_exist()) {
                echo "Found child with class attribute using XPath '$attrXpath':\n";
                echo "  Tag: " . $attrChild->get_tag() . "\n";
                echo "  ID: " . $attrChild->get_id() . "\n";
                echo "  Class: " . $attrChild->get_attribute("class") . "\n";
                echo "  Inner text: " . $attrChild->get_inner_text() . "\n";
                
                // Add a new attribute to the child
                $attrResult = $attrChild->set_attribute("data-attr-xpath-child", ($k + 1));
                
                if ($attrResult) {
                    echo "  Successfully added data-attr-xpath-child attribute to child\n";
                } else {
                    echo "  Failed to add data-attr-xpath-child attribute to child\n";
                }
            } else {
                echo "No child with class attribute found with XPath '$attrXpath'\n";
            }
        }
    } else {
        echo "\nNo children with class attribute found with XPath '$attrXpath'\n";
    }
    
    // Try to find a child element using a complex XPath expression
    $complexXpath = ".//span[contains(@class, 'example') or contains(text(), 'Test')][1]";
    $complexChildren = $divs->get_child_by_xpath($complexXpath);

    if (count($complexChildren) > 0) {
        $complexChildrenCount = count($complexChildren);
        echo "\nFor Iterate for each div element in results\n";

        for ($k = 0; $k < $complexChildrenCount; $k++) {
            $complexChild = $complexChildren[$k];
            echo "\nFor div element number " . ($k + 1) ." in results: \n";
            if ($complexChild->is_exist()) {
                echo "Found child using complex XPath '$complexXpath':\n";
                echo "  Tag: " . $complexChild->get_tag() . "\n";
                echo "  ID: " . $complexChild->get_id() . "\n";
                echo "  Class: " . $complexChild->get_attribute("class") . "\n";
                echo "  Inner text: " . $complexChild->get_inner_text() . "\n";
                
                // Add a new attribute to the child
                $attrResult = $complexChild->set_attribute("data-complex-xpath-child", ($k + 1));
                
                if ($attrResult) {
                    echo "  Successfully added data-complex-xpath-child attribute to child\n";
                } else {
                    echo "  Failed to add data-complex-xpath-child attribute to child\n";
                }
            } else {
                echo "No child found using complex XPath '$complexXpath'\n";
            }
        }
    } else {
        echo "\nNo children found using complex XPath '$complexXpath'\n";
    }
    
    // Try to find a child element using a non-existent XPath expression
    $nonExistentXpath = ".//nonexistenttag";
    $nonExistentChildren = $divs->get_child_by_xpath($nonExistentXpath);

    if (count($nonExistentChildren) > 0) {
        $nonExistentChildrenCount = count($nonExistentChildren);
        echo "\nFor Iterate for each div element in results\n";

        for ($k = 0; $k < $nonExistentChildrenCount; $k++) {
            $nonExistentChild = $nonExistentChildren[$k];
            echo "\nFor div element number " . ($k + 1) ." in results: \n";
            if ($nonExistentChild->is_exist()) {
                echo "Unexpectedly found child using non-existent XPath '$nonExistentXpath':\n";
                echo "  Tag: " . $nonExistentChild->get_tag() . "\n";
                echo "  ID: " . $nonExistentChild->get_id() . "\n";
            } else {
                echo "As expected, no child found using non-existent XPath '$nonExistentXpath'\n";
            }
        }
    } else {
        echo "\nAs expected, no children found using non-existent XPath '$nonExistentXpath'\n";
    }
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>