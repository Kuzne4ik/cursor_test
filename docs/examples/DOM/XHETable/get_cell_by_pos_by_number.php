<?php

/**
 * Example of using get_cell_by_pos_by_number function of XHETable class
 *
 * Find table by number and get cell by position
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
echo "=== Example of using get_cell_by_pos_by_number ===\n\n";

// Example 1: Get cell by position 0 (first cell)
echo "Example 1: Get cell by position 0 (first cell)\n\n";

$cell_by_pos = DOM::$table->get_cell_by_pos_by_number(0, 0); // Table 0, position 0
echo "Cell text by position 0: '" . $cell_by_pos . "'\n\n";


// Example 2: Get cell by position 5 (sixth cell)
echo "Example 2: Get cell by position 5 (sixth cell)\n\n";

$cell_by_pos_5 = DOM::$table->get_cell_by_pos_by_number(0, 5); // Table 0, position 5
echo "Cell text by position 5: '" . $cell_by_pos_5 . "'\n\n";


// Example 3: Get cell by position as HTML
echo "Example 3: Get cell by position as HTML\n\n";

$cell_html = DOM::$table->get_cell_by_pos_by_number(0, 1, true); // Table 0, position 1, as HTML
echo "Cell HTML by position 1:\n" . $cell_html . "\n\n";


// Example 4: Get cell by position from table in frame
echo "Example 4: Get cell by position from table in frame\n\n";

$cell_frame = DOM::$table->get_cell_by_pos_by_number(0, 2, false, "0"); // Table 0 in frame 0, position 2
echo "Cell text by position 2 from table in frame 0: '" . $cell_frame . "'\n\n";


// Example 5: Get cell by position from nested frames
echo "Example 5: Get cell by position from nested frames\n\n";

$cell_nested = DOM::$table->get_cell_by_pos_by_number(0, 3, false, "1:2:3"); // Table 0 in nested frames 1:2:3, position 3
echo "Cell text by position 3 from table in nested frames 1:2:3: '" . $cell_nested . "'\n\n";


// Example 6: Read multiple cells by positions
echo "Example 6: Read multiple cells by positions\n\n";

$positions = [0, 1, 2, 3, 4]; // First 5 positions
echo "Reading cells by positions:\n";

foreach ($positions as $position) {
    $cell_value = DOM::$table->get_cell_by_pos_by_number(0, $position);
    echo "- Position $position: '" . $cell_value . "'\n";
}

echo "\n";


// Example 7: Compare get_cell_by_number and get_cell_by_pos_by_number
echo "Example 7: Compare get_cell_by_number and get_cell_by_pos_by_number\n";
echo "Example 7: Compare get_cell_by_number and get_cell_by_pos_by_number\n\n";

// Get table structure information
$row_count = DOM::$table->get_rows_by_number(0);
$col_count = DOM::$table->get_cols_by_number(0);

echo "Table structure: $row_count rows, $col_count columns\n";
echo "Table structure: $row_count rows, $col_count columns\n";

// Compare results
$cell_by_number = DOM::$table->get_cell_by_number(0, 1, 2); // Row 1, column 2
$cell_by_pos = DOM::$table->get_cell_by_pos_by_number(0, 7); // Position 7 (1*col_count + 2)

echo "\nСравнение результатов:\n";
echo "\nComparison of results:\n";
echo "- get_cell_by_number (row 1, column 2): '" . $cell_by_number . "'\n";
echo "- get_cell_by_pos_by_number (position 7): '" . $cell_by_pos . "'\n";
echo "\n";


// Example 8: Search by positions using HTML output
echo "Example 8: Search by positions using HTML output\n";
echo "Example 8: Search by positions using HTML output\n\n";

$positions = [0, 1, 2];
echo "Reading cells by positions as HTML:\n";
echo "Reading cells by positions as HTML:\n";

foreach ($positions as $position) {
    $cell_html = DOM::$table->get_cell_by_pos_by_number(0, $position, true);
    echo "- Position $position (HTML):\n" . $cell_html . "\n\n";
    echo "- Position $position (HTML):\n" . $cell_html . "\n\n";
}


// Example 9: Check position existence before reading
echo "Example 9: Check position existence before reading\n";
echo "Example 9: Check position existence before reading\n\n";

// First get total number of cells
$total_cells = DOM::$table->get_cells_by_number(0);
echo "Total cells in table: $total_cells\n";
echo "Total cells in table: $total_cells\n";

// Check different positions
$test_positions = [0, 5, 10, 15];

foreach ($test_positions as $position) {
    $cell_value = DOM::$table->get_cell_by_pos_by_number(0, $position);
    
    if ($cell_value !== '') {
        echo "Position $position: '$cell_value'\n";
        echo "Position $position: '$cell_value'\n";
    } else {
        echo "Position $position: empty cell or position doesn't exist\n";
        echo "Position $position: empty cell or position doesn't exist\n";
    }
}

echo "\n";


echo "All get_cell_by_pos_by_number examples completed!\n";
echo "All get_cell_by_pos_by_number examples completed!\n";

// Stop work
WINDOW::$app->quit();
?>