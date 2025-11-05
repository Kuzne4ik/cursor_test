<?php

/**
 * Example of using get_col_by_number function of XHETable class
 *
 * Find table by number and get column
 *
 * Note: Original comment mentions "row", but function returns column
 */

$xhe_host = "127.0.0.1:7013";

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

echo "=== Example of using get_col_by_number ===\n\n";

// Example 1: Get text of first column
echo "Example 1: Get text of first column\n\n";

$col_text = DOM::$table->get_col_by_number(0, 0); // Table 0, column 0
echo "Text of first column:\n$col_text\n\n";


// Example 2: Get text of second column
echo "Example 2: Get text of second column\n\n";

$col_text_2nd = DOM::$table->get_col_by_number(0, 1); // Table 0, column 1
echo "Text of second column:\n$col_text_2nd\n\n";


// Example 3: Get column as HTML
echo "Example 3: Get column as HTML\n\n";

$col_html = DOM::$table->get_col_by_number(0, 0, true); // Table 0, column 0, as HTML
echo "HTML of first column:\n$col_html\n\n";


// Example 4: Get column from table in frame
echo "Example 4: Get column from table in frame\n\n";

$col_frame = DOM::$table->get_col_by_number(0, 2, false, "0"); // Table 0 in frame 0, column 2
echo "Text of third column from table in frame 0:\n$col_frame\n\n";


// Example 5: Get column from nested frames
echo "Example 5: Get column from nested frames\n\n";

$col_nested = DOM::$table->get_col_by_number(0, 1, false, "1:2:3"); // Table 0 in nested frames 1:2:3, column 1
echo "Text of second column from table in nested frames 1:2:3:\n$col_nested\n\n";

// Stop work
WINDOW::$app->quit();
?>