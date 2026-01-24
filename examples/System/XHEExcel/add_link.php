<?php 
// Scenario: Demonstrates how to add different types of hyperlinks to an Excel sheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Set variables for method arguments
$filePath = "test/test.xlsx";
$openVisible = false;
$debugMode = true;

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Open the Excel file
SYSTEM::$excel->open($filePath, $openVisible, $debugMode);

// Example 1: Add web hyperlink to Excel sheet
echo("\nExample 1: Add web hyperlink to Excel sheet\n");

// Set variables for method arguments
$webLinkSheetIndex = 0;
$webLinkRow = 1;
$webLinkColumn = "D";
$webLinkDisplayText = "Yandex";
$webLinkUrl = "https://yandex.ru";
$webLinkScreenTip = "yandex";

// Add web hyperlink
$result = SYSTEM::$excel->add_link($filePath, $webLinkSheetIndex, $webLinkRow, $webLinkColumn, 
                                   $webLinkDisplayText, $webLinkUrl, $webLinkScreenTip);
if ($result) {
    echo("Web hyperlink added successfully: $webLinkDisplayText -> $webLinkUrl\n");
} else {
    echo("Failed to add web hyperlink: $webLinkDisplayText\n");
}

// Example 2: Add cell reference hyperlink within the same sheet
echo("\nExample 2: Add cell reference hyperlink within the same sheet\n");

// Set variables for method arguments
$cellRefSheetIndex = 0;
$cellRefRow = 2;
$cellRefColumn = "D";
$cellRefDisplayText = "B1";
$cellRefTarget = "B1";
$cellRefScreenTip = "B1";

// Add cell reference hyperlink
$result = SYSTEM::$excel->add_link($filePath, $cellRefSheetIndex, $cellRefRow, $cellRefColumn, 
                                   $cellRefDisplayText, $cellRefTarget, $cellRefScreenTip);
if ($result) {
    echo("Cell reference hyperlink added successfully: $cellRefDisplayText -> $cellRefTarget\n");
} else {
    echo("Failed to add cell reference hyperlink: $cellRefDisplayText\n");
}

// Example 3: Add hyperlink to a cell in another sheet
echo("\nExample 3: Add hyperlink to a cell in another sheet\n");

// Set variables for method arguments
$otherSheetSheetIndex = 0;
$otherSheetRow = 3;
$otherSheetColumn = "D";
$otherSheetDisplayText = "new sheet";
$otherSheetTarget = "'new sheet'!A1";
$otherSheetScreenTip = "new sheet";

// Add hyperlink to another sheet
$result = SYSTEM::$excel->add_link($filePath, $otherSheetSheetIndex, $otherSheetRow, $otherSheetColumn, 
                                   $otherSheetDisplayText, $otherSheetTarget, $otherSheetScreenTip);
if ($result) {
    echo("Hyperlink to another sheet added successfully: $otherSheetDisplayText -> $otherSheetTarget\n");
} else {
    echo("Failed to add hyperlink to another sheet: $otherSheetDisplayText\n");
}

// Save and close the Excel file
SYSTEM::$excel->save($filePath);
SYSTEM::$excel->close($filePath);

// Quit the application
WINDOW::$app->quit();
?>
