<?php
// Scenario: Get cell text by row and column coordinates using XHETable class
// Description: Demonstrates how to find a table by its number and retrieve text content from a specific cell using row and column coordinates
// Classes used: DOM, XHETable, XHEBrowser, XHEApplication

/**
 * Example of using get_cell_by_number function of XHETable class
 *
 * Find table by number and get cell text
 */

$xhe_host = "127.0.0.1:7010";

if (!isset($path))
{
    $path = "../../../../../../Templates/init.php";
    require($path);
}

WEB::$browser->navigate(TEST_POLYGON_URL . "table.html");

echo "=== Example of using get_cell_by_number ===\n\n";

// Example 1: Get cell text from first row, first column
echo "Example 1: Get cell text from first row, first column\n\n";

$cell_text = DOM::$table->get_cell_by_number(0, 0, 0); // Table 0, row 0, column 0
echo "Cell text (table 0, row 0, column 0): '" . $cell_text . "'\n\n";


// Example 2: Get cell text from second row, third column
echo "Example 2: Get cell text from second row, third column\n\n";

$cell_text_2nd_3rd = DOM::$table->get_cell_by_number(0, 1, 2); // Table 0, row 1, column 2
echo "Cell text (table 0, row 1, column 2): '" . $cell_text_2nd_3rd . "'\n\n";


// Example 3: Get cell as HTML instead of text
echo "Example 3: Get cell as HTML instead of text\n\n";

$cell_html = DOM::$table->get_cell_by_number(0, 0, 0, true); // As HTML
echo "HTML cell (table 0, row 0, column 0):\n" . $cell_html . "\n\n";


// Example 4: Get cell from table in frame
echo "Example 4: Get cell from table in frame\n\n";

$cell_frame = DOM::$table->get_cell_by_number(0, 1, 2, false, "0"); // Table 0 in frame 0
echo "Cell text (table 0 in frame 0, row 1, column 2): '" . $cell_frame . "'\n\n";


// Example 5: Get cell from nested frames
echo "Example 5: Get cell from nested frames\n\n";

$cell_nested = DOM::$table->get_cell_by_number(0, 0, 0, false, "1:2:3"); // Table 0 in nested frames 1:2:3
echo "Cell text (table 0 in nested frames 1:2:3, row 0, column 0): '" . $cell_nested . "'\n\n";


// Example 6: Read data from table for analysis
echo "Example 6: Read data from table for analysis\n\n";

$table_number = 0;
$row_count = DOM::$table->get_rows_by_number($table_number);
$col_count = DOM::$table->get_cols_by_number($table_number);

echo "Reading data from table $table_number:\n";

$table_data = [];
for ($row = 0; $row < min($row_count, 5); $row++) { // Read first 5 rows
    $row_data = [];
    for ($col = 0; $col < min($col_count, 5); $col++) { // Read first 5 columns
        $cell_value = DOM::$table->get_cell_by_number($table_number, $row, $col);
        $row_data[] = $cell_value;
    }
    $table_data[] = $row_data;
}

// Output data as table
echo "\nTable data:\n";
foreach ($table_data as $row_index => $row) {
    echo "Row $row_index: " . implode(" | ", $row) . "\n";
}

echo "\n";


// Example 7: Search for specific values in table
echo "Example 7: Search for specific values in table\n\n";

$table_number = 0;
$row_count = DOM::$table->get_rows_by_number($table_number);
$col_count = DOM::$table->get_cols_by_number($table_number);

$target_values = ['Total', 'Sum'];
$found_cells = [];

for ($row = 0; $row < $row_count; $row++) {
    for ($col = 0; $col < $col_count; $col++) {
        $cell_value = DOM::$table->get_cell_by_number($table_number, $row, $col);
        
        foreach ($target_values as $target) {
            if (stripos($cell_value, $target) !== false) {
                $found_cells[] = [
                    'row' => $row,
                    'col' => $col,
                    'value' => $cell_value
                ];
                break;
            }
        }
    }
}

echo "Found cells with keywords:\n";
foreach ($found_cells as $cell) {
    echo "- Row {$cell['row']}, column {$cell['col']}: '{$cell['value']}'\n";
}

echo "\n";


// Example 8: Check cell existence before reading
echo "Example 8: Check cell existence before reading\n\n";

$table_number = 0;
$row_count = DOM::$table->get_rows_by_number($table_number);
$col_count = DOM::$table->get_cols_by_number($table_number);

// Check if table exists
$table_element = DOM::$table->get_by_number($table_number);
if ($table_element->is_exist()) {
    echo "Table $table_number exists\n";
    
    // Check if cell exists
    $test_row = min($row_count - 1, 10);
    $test_col = min($col_count - 1, 10);
    
    $cell_value = DOM::$table->get_cell_by_number($table_number, $test_row, $test_col);
    
    if ($cell_value !== '') {
        echo "Cell ($test_row, $test_col) exists and contains: '$cell_value'\n";
    } else {
        echo "Cell ($test_row, $test_col) contains no data\n";
    }
} else {
    echo "Table $table_number not found on page\n";
}

echo "\n";


echo "All get_cell_by_number examples completed!\n";

WINDOW::$app->quit();
?>