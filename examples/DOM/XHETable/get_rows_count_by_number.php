<?php
// Scenario: Get the number of rows in a table using XHETable class
// Description: Demonstrates how to find a table by its number and retrieve the total count of rows
// Classes used: DOM, XHETable, XHEBrowser, XHEApplication

/**
 * Example of using get_rows_count_by_number function of XHETable class
 *
 * Find table by number and get the number of rows
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

echo "=== Example of using get_rows_count_by_number ===\n\n";

// Пример 1: Получение количества строк в первой таблице
// Example 1: Get number of rows in the first table
echo "Пример 1: Получение количества строк в первой таблице\n";
echo "Example 1: Get number of rows in the first table\n\n";

$row_count = DOM::$table->get_rows_count_by_number(0); // Table number 0
echo "Number of rows in table 0: " . $row_count . "\n\n";


// Example 2: Get number of rows in the second table
echo "Example 2: Get number of rows in the second table\n\n";

$row_count_2nd = DOM::$table->get_rows_count_by_number(1); // Table number 1
echo "Number of rows in table 1: " . $row_count_2nd . "\n\n";


// Example 3: Get number of rows in table in frame
echo "Example 3: Get number of rows in table in frame\n\n";

$row_count_frame = DOM::$table->get_rows_count_by_number(0, "0"); // Table 0 in frame 0
echo "Number of rows in table 0 in frame 0: " . $row_count_frame . "\n\n";


// Example 4: Get number of rows in nested frames
echo "Example 4: Get number of rows in nested frames\n\n";

$row_count_nested = DOM::$table->get_rows_count_by_number(0, "1:2:3"); // Table 0 in nested frames 1:2:3
echo "Number of rows in table 0 in nested frames 1:2:3: " . $row_count_nested . "\n\n";

echo "\n";


echo "All get_rows_count_by_number examples completed!\n";

// Stop work
WINDOW::$app->quit();
?>