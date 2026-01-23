<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate adding different types of hyperlinks to Excel file
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel and prepare file path
$filePath = "test/test.xlsx";
SYSTEM::$excel->kill();

// Example 1: Add web hyperlink
echo("Example 1: Add web hyperlink : ");
// Extract method arguments into variables
$sheetIndex = 0;
$row1 = 1;
$column1 = "D";
$linkText1 = "Yandex";
$url1 = "https://yandex.ru";
$tooltip1 = "yandex";
$result = SYSTEM::$excelfile->add_link($filePath, $sheetIndex, $row1, $column1, $linkText1, $url1, $tooltip1);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

sleep(2);

// Example 2: Add hyperlink to cell
echo("\nExample 2: Add hyperlink to cell : ");
// Extract method arguments into variables
$row2 = 2;
$linkText2 = "B1";
$cellReference2 = "B1";
$tooltip2 = "B1";
$result = SYSTEM::$excelfile->add_link($filePath, $sheetIndex, $row2, $column1, $linkText2, $cellReference2, $tooltip2);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 3: Add hyperlink to cell in another sheet
echo("\nExample 3: Add hyperlink to cell in another sheet : ");
// Extract method arguments into variables
$row3 = 3;
$linkText3 = "new sheet";
$cellReference3 = "'new sheet'!A1";
$tooltip3 = "new sheet";
$result = SYSTEM::$excelfile->add_link($filePath, $sheetIndex, $row3, $column1, $linkText3, $cellReference3, $tooltip3);
if ($result === true)
    echo("true\n");
else
    echo("false\n");



// Close the file
SYSTEM::$excel->close($filePath);

// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>