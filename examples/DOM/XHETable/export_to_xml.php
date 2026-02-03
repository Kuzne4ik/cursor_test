<?php
// Scenario: Export table data to XML format using XHETable class
// Description: Demonstrates how to export table data to XML file with various options for rows, columns, and formatting
// Classes used: DOM, XHETable, XHEBrowser, XHEApplication

/**
 * Example of using export_to_xml function of XHETable class
 *
 * Export table to XML file
 */

$xhe_host = "127.0.0.1:7010";

if (!isset($path))
{
    $path = "../../../Templates/init.php";
    require($path);
}

WEB::$browser->navigate(TEST_POLYGON_URL . "table.html");
echo "=== Example of using export_to_xml ===\n\n";

// Example 1: Export entire table to XML file
echo "Example 1: Export entire table to XML file\n\n";

$xml_result = DOM::$table->export_to_xml(
    'output/table_data.xml', // File path
    0,                      // Table number on page (starts from 0)
    '',                     // All rows (empty string)
    '',                     // All columns (empty string)
    false                   // As text (not as HTML)
);

echo "Export result: " . ($xml_result ? 'Success' : 'Error') . "\n\n";


// Example 2: Export specific rows and columns
echo "Example 2: Export specific rows and columns\n\n";

$xml_result = DOM::$table->export_to_xml(
    'output/table_data_filtered.xml', // File path
    0,                              // Table number
    '0,2,4',                        // Rows with indices 0, 2, 4
    '1,3,5',                        // Columns with indices 1, 3, 5
    false                           // As text
);

echo "Export result: " . ($xml_result ? 'Success' : 'Error') . "\n\n";


// Example 3: Export as HTML
echo "Example 3: Export as HTML\n\n";

$xml_result = DOM::$table->export_to_xml(
    'output/table_data_html.xml', // File path
    0,                           // Table number
    '',                          // All rows
    '',                          // All columns
    true                         // As HTML
);

echo "Export result: " . ($xml_result ? 'Success' : 'Error') . "\n\n";


// Example 4: Export with frame specification
echo "Example 4: Export with frame specification\n\n";

$xml_result = DOM::$table->export_to_xml(
    'output/table_data_frame.xml', // File path
    0,                            // Table number
    '0,1',                        // First two rows
    '0,1',                        // First two columns
    false,                        // As text
    '0'                           // Frame 0
);

echo "Export result: " . ($xml_result ? 'Success' : 'Error') . "\n\n";


echo "All export_to_xml examples completed!\n";

WINDOW::$app->quit();
?>