<?php
// Scenario: Get the number of cells in a table using XHETable class
// Description: Demonstrates how to find a table by its number and retrieve the total count of cells
// Classes used: DOM, XHETable, XHEBrowser, XHEApplication

/**
 * Example of using get_cells_by_number function of XHETable class
 *
 * Find table by number and get the number of cells
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

echo "=== Example of using get_cells_by_number ===\n\n";

// Example 1: Get number of cells in the first table
echo "Example 1: Get number of cells in the first table\n\n";

$cell_count = DOM::$table->get_cells_by_number(0); // Table number 0
echo "Number of cells in table 0: " . $cell_count . "\n\n";


// Example 2: Get number of cells in the second table
echo "Example 2: Get number of cells in the second table\n\n";

$cell_count_2nd = DOM::$table->get_cells_by_number(1); // Table number 1
echo "Number of cells in table 1: " . $cell_count_2nd . "\n\n";


// Example 3: Get number of cells in table in frame
echo "Example 3: Get number of cells in table in frame\n\n";

$cell_count_frame = DOM::$table->get_cells_by_number(0, "0"); // Table 0 in frame 0
echo "Number of cells in table 0 in frame 0: " . $cell_count_frame . "\n\n";


// Example 4: Get number of cells in nested frames
echo "Example 4: Get number of cells in nested frames\n\n";

$cell_count_nested = DOM::$table->get_cells_by_number(0, "1:2:3"); // Table 0 in nested frames 1:2:3
echo "Number of cells in table 0 in nested frames 1:2:3: " . $cell_count_nested . "\n\n";

// Stop work
WINDOW::$app->quit();
?>