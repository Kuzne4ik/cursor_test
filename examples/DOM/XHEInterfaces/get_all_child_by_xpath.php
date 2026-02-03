<?php

// Scenario: Get all child elements by XPath from a collection
// Description: This example demonstrates how to get a collection of elements and then find all child elements using XPath
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

// Example: Get all div elements and then find all child elements using XPath

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
$divsLength = $divs->count();
if ($divsLength > 0)
{
    echo "Found " . $divsLength . " div elements\n";
    
    // Try to find all child elements using a simple XPath expression
    $simpleXpath = "./*";
    $childrenBySimpleXpath = $divs->get_all_child_by_xpath($simpleXpath);
    
    // Check if any children were found
    $simpleCount = count($childrenBySimpleXpath);
    if ($simpleCount > 0)
    {
        echo "Found " . $simpleCount . " child elements using XPath '" . $simpleXpath . "'\n";
    }
    else
    {
        echo "No child elements found using XPath '" . $simpleXpath . "'\n";
    }
    
    // Try to find all child elements using a specific tag XPath expression
    $tagXpath = "./span";
    $childrenByTagXpath = $divs->get_all_child_by_xpath($tagXpath);
    
    // Check if any children were found
    $tagCount = count($childrenByTagXpath);
    if ($tagCount > 0)
    {
        echo "Found " . $tagCount . " span child elements using XPath '" . $tagXpath . "'\n";
    }
    else
    {
        echo "No span child elements found using XPath '" . $tagXpath . "'\n";
    }
    
    // Try to find all child elements using an attribute XPath expression
    $attrXpath = ".//*[@class]";
    $childrenByAttrXpath = $divs->get_all_child_by_xpath($attrXpath);
    
    // Check if any children were found
    $attrCount = count($childrenByAttrXpath);
    if ($attrCount > 0)
    {
        echo "Found " . $attrCount . " child elements with class attribute using XPath '" . $attrXpath . "'\n";
    }
    else
    {
        echo "No child elements with class attribute found using XPath '" . $attrXpath . "'\n";
    }
    
    // Try to find all child elements using a complex XPath expression
    $complexXpath = ".//span[contains(@class, 'example') or contains(text(), 'Test')]";
    $childrenByComplexXpath = $divs->get_all_child_by_xpath($complexXpath);
    
    // Check if any children were found
    $complexCount = count($childrenByComplexXpath);
    if ($complexCount > 0)
    {
        echo "Found " . $complexCount . " child elements using complex XPath '" . $complexXpath . "'\n";
    }
    else
    {
        echo "No child elements found using complex XPath '" . $complexXpath . "'\n";
    }
    
    // Try to find all child elements using a non-existent XPath expression
    $nonExistentXpath = ".//nonexistenttag";
    $childrenByNonExistentXpath = $divs->get_all_child_by_xpath($nonExistentXpath);
    
    // Check if any children were found
    $nonExistentCount = count($childrenByNonExistentXpath);
    if ($nonExistentCount > 0)
    {
        echo "Unexpectedly found " . $nonExistentCount . " child elements using non-existent XPath '" . $nonExistentXpath . "'\n";
    }
    else
    {
        echo "As expected, no child elements found using non-existent XPath '" . $nonExistentXpath . "'\n";
    }
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>