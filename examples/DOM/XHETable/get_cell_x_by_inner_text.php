<?php
// Scenario: Get cell X coordinate by table inner text using XHETable class
// Description: Demonstrates how to find a table by its inner text content and retrieve the X coordinate of a specific cell
// Classes used: DOM, XHETable, XHEBrowser, XHEApplication

/**
 * Example of using get_cell_x_by_inner_text function of XHETable class
 *
 * Find table by inner text and get cell X coordinate
 */

// Connection line to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Go to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "table.html");

echo "=== Example of using get_cell_x_by_inner_text ===\n\n";

// Example 1: Get cell X coordinate by exact table inner text
echo "Example 1: Get cell X coordinate by exact table inner text\n\n";

$cell_x_by_text = DOM::$table->get_cell_x_by_inner_text(
    'Таблица с данными', // Table inner text
    true,                // Exact match
    1,                   // Row number
    2,                   // Column number
    "-1"                 // Frame
);

echo "X coordinate of cell (1, 2) by exact table text 'Таблица с данными': $cell_x_by_text\n\n";


// Example 2: Get cell X coordinate by partial table inner text
echo "Example 2: Get cell X coordinate by partial table inner text\n\n";

$cell_x_partial = DOM::$table->get_cell_x_by_inner_text(
    'данными',           // Partial table text
    false,               // Inexact match
    0,                   // Row number
    0,                   // Column number
    "-1"                 // Frame
);

echo "X coordinate of cell (0, 0) by partial table text 'данными': $cell_x_partial\n\n";


// Example 3: Get cell X coordinate from table in frame
echo "Example 3: Get cell X coordinate from table in frame\n\n";

$cell_x_frame = DOM::$table->get_cell_x_by_inner_text(
    'Данные во фрейме',  // Table inner text
    true,                // Exact match
    1,                   // Row number
    1,                   // Column number
    '0'                  // Frame 0
);

echo "X coordinate of cell (1, 1) from table in frame 0 with text 'Данные во фрейме': $cell_x_frame\n\n";


// Example 4: Get cell X coordinate from table in nested frames
echo "Example 4: Get cell X coordinate from table in nested frames\n\n";

$cell_x_nested = DOM::$table->get_cell_x_by_inner_text(
    'Вложенные данные',  // Table inner text
    true,                 // Exact match
    0,                    // Row number
    0,                    // Column number
    '1:2:3'               // Nested frames
);

echo "X coordinate of cell (0, 0) from table in nested frames 1:2:3 with text 'Вложенные данные': $cell_x_nested\n\n";

// Stop work
WINDOW::$app->quit();
?>