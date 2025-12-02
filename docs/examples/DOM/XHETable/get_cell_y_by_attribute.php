<?php
// Scenario: Get cell Y coordinate by table attribute using XHETable class
// Description: Demonstrates how to find a table by its attribute and retrieve the Y coordinate of a specific cell
// Classes used: DOM, XHETable, XHEBrowser, XHEApplication

/**
 * Example of using get_cell_y_by_attribute function of XHETable class
 *
 * Find table by attribute and get cell Y coordinate
 */

// Connection line to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Go to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "table.html");

echo "=== Example of using get_cell_y_by_attribute ===\n\n";

// Example 1: Get cell Y coordinate by table ID
echo "Example 1: Get cell Y coordinate by table ID\n\n";

$cell_y_by_id = DOM::$table->get_cell_y_by_attribute(
    'id',                // Attribute name
    'my-table',          // Attribute value
    true,                // Exact match
    1,                   // Row number
    2,                   // Column number
    "-1"                 // Frame
);

echo "Y coordinate of cell (1, 2) by table ID 'my-table': $cell_y_by_id\n\n";


// Example 2: Get cell Y coordinate by table class
echo "Example 2: Get cell Y coordinate by table class\n\n";

$cell_y_by_class = DOM::$table->get_cell_y_by_attribute(
    'class',             // Attribute name
    'data-table',        // Attribute value
    true,                // Exact match
    0,                   // Row number
    0,                   // Column number
    "-1"                 // Frame
);

echo "Y coordinate of cell (0, 0) by table class 'data-table': $cell_y_by_class\n\n";


// Example 3: Get cell Y coordinate by partial attribute match
echo "Example 3: Get cell Y coordinate by partial attribute match\n\n";

$cell_y_partial = DOM::$table->get_cell_y_by_attribute(
    'class',             // Attribute name
    'table',             // Partial value
    false,               // Inexact match
    1,                   // Row number
    1,                   // Column number
    "-1"                 // Frame
);

echo "Y coordinate of cell (1, 1) by partial class 'table': $cell_y_partial\n\n";


// Example 4: Get cell Y coordinate from table in frame
echo "Example 4: Get cell Y coordinate from table in frame\n\n";

$cell_y_frame = DOM::$table->get_cell_y_by_attribute(
    'id',                // Attribute name
    'frame-table',       // Attribute value
    true,                // Exact match
    0,                   // Row number
    0,                   // Column number
    '0'                  // Frame 0
);

echo "Y coordinate of cell (0, 0) from table in frame 0 with ID 'frame-table': $cell_y_frame\n\n";


// Example 5: Get cell Y coordinate from table in nested frames
echo "Example 5: Get cell Y coordinate from table in nested frames\n\n";

$cell_y_nested = DOM::$table->get_cell_y_by_attribute(
    'class',             // Attribute name
    'nested-data',       // Attribute value
    true,                // Exact match
    1,                   // Row number
    2,                   // Column number
    '1:2:3'              // Nested frames
);

echo "Y coordinate of cell (1, 2) from table in nested frames 1:2:3 with class 'nested-data': $cell_y_nested\n\n";

// Stop work
WINDOW::$app->quit();
?>