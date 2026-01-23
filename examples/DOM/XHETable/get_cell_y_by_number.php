<?php
// Scenario: Get cell Y coordinate by row and column coordinates using XHETable class
// Description: Demonstrates how to find a table by its number and retrieve the Y coordinate of a specific cell using row and column coordinates
// Classes used: DOM, XHETable, XHEBrowser, XHEApplication

/**
 * Example of using get_cell_y_by_number function of XHETable class
 *
 * Find table by number and get cell Y coordinate
 */

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

echo "=== Example of using get_cell_y_by_number ===\n\n";

// Example 1: Get Y coordinate of first cell (0,0)
echo "Example 1: Get Y coordinate of first cell (0,0)\n\n";

$cell_y = DOM::$table->get_cell_y_by_number(0, 0, 0); // Table 0, row 0, column 0
echo "Y coordinate of cell (0, 0): $cell_y\n\n";


// Example 2: Get Y coordinate of cell from second row, third column
echo "Example 2: Get Y coordinate of cell from second row, third column\n\n";

$cell_y_2nd_3rd = DOM::$table->get_cell_y_by_number(0, 1, 2); // Table 0, row 1, column 2
echo "Y coordinate of cell (1, 2): $cell_y_2nd_3rd\n\n";


// Example 3: Get Y coordinate from table in frame
echo "Example 3: Get Y coordinate from table in frame\n\n";

$cell_y_frame = DOM::$table->get_cell_y_by_number(0, 1, 1, "0"); // Table 0 in frame 0, row 1, column 1
echo "Y coordinate of cell (1, 1) from table in frame 0: $cell_y_frame\n\n";


// Example 4: Get Y coordinate from nested frames
echo "Example 4: Get Y coordinate from nested frames\n\n";

$cell_y_nested = DOM::$table->get_cell_y_by_number(0, 0, 0, "1:2:3"); // Table 0 in nested frames 1:2:3, row 0, column 0
echo "Y coordinate of cell (0, 0) from table in nested frames 1:2:3: $cell_y_nested\n\n";


// Stop work
WINDOW::$app->quit();

?>