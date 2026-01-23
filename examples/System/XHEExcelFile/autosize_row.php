<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting cell text and applying autosize to rows and columns
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set cell text with large content
echo("Example 1: Set cell text with large content : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowNumber = 7;
$columnLetter = "A";
$largeText = "new large large large large large large large large text";
$result = SYSTEM::$excelfile->set_cell($filePath, $sheetIndex, $rowNumber, $columnLetter, $largeText);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Apply autosize to rows and columns
echo("\nExample 2: Apply autosize to rows and columns: ");
$result1 = SYSTEM::$excelfile->autosize_row($filePath, $sheetIndex);
$result2 = SYSTEM::$excelfile->autosize_col($filePath, $sheetIndex);
if ($result1 === true && $result2 === true)
    echo("true\n");
else
    echo("false\n");

// View the result


// End of script
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>
