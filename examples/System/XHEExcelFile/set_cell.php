<?php
$xhe_host = "127.0.0.1:7013";

// Connect functional objects if not already connected
if (!isset($path)) {
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting cell values with different types
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set cell value as number
echo("\nExample 1: Set cell value as number J4 Sheet $sheetNumber : ");
// Extract method arguments into variables
$excelFilePath = "test/test.xlsx";
$sheetNumber = 0;
$rowNumber1 = 4;
$columnLetter1 = "J";
$cellValue1 = "99999";
$cellType1 = "Number";
$result = SYSTEM::$excelfile->set_cell($excelFilePath, $sheetNumber, $rowNumber1, $columnLetter1, $cellValue1, $cellType1);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Get cell value
echo("\nExample 2: Get cell value J4 Sheet $sheetNumber : ");
$cellValue = SYSTEM::$excelfile->get_cell($excelFilePath, $sheetNumber, $rowNumber1, $columnLetter1);
echo($cellValue . "\n");

// Example 3: Set cell value as text
echo("\nExample 3: Set cell value as text J5 Sheet $sheetNumber : ");
// Extract method arguments into variables
$rowNumber2 = 5;
$columnLetter2 = 10;
$cellValue2 = "new text 5";
$cellType2 = "";
$result = SYSTEM::$excelfile->set_cell($excelFilePath, $sheetNumber, $rowNumber2, $columnLetter2, $cellValue2, $cellType2);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 4: Get cell value
echo("\nExample 4: Get cell value J5 Sheet $sheetNumber : ");
$cellValue = SYSTEM::$excelfile->get_cell($excelFilePath, $sheetNumber, $rowNumber2, $columnLetter2);
echo($cellValue . "\n");

// Example 5: Set cell value as date
echo("\nExample 5: Set cell value as date J6 Sheet $sheetNumber : ");
// Extract method arguments into variables
$rowNumber3 = 6;
$columnLetter3 = 10;
$cellValue3 = "01.01.2025";
$cellType3 = "DateTime";
$result = SYSTEM::$excelfile->set_cell($excelFilePath, $sheetNumber, $rowNumber3, $columnLetter3, $cellValue3, $cellType3);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 6: Get cell value
echo("\nExample 6: Get cell value J6 Sheet $sheetNumber : ");
$cellValue = SYSTEM::$excelfile->get_cell($excelFilePath, $sheetNumber, $rowNumber3, $columnLetter3);
echo($cellValue . "\n");

// Example 7: Set cell value as formula
echo("\nExample 7: Set cell value as formula J7 Sheet $sheetNumber : ");
// Extract method arguments into variables
$rowNumber4 = 7;
$columnLetter4 = "J";
$cellValue4 = "=SUM(B7:B9)";
$cellType4 = "";
$result = SYSTEM::$excelfile->set_cell($excelFilePath, $sheetNumber, $rowNumber4, $columnLetter4, $cellValue4, $cellType4);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 8: Get cell value
echo("\nExample 8: Get cell value J7 Sheet $sheetNumber : ");
$cellValue = SYSTEM::$excelfile->get_cell($excelFilePath, $sheetNumber, $rowNumber4, $columnLetter4);
echo($cellValue . "\n");

// Example 9: Set cell value as boolean true
echo("\nExample 9: Set cell value as boolean true J8 Sheet $sheetNumber : ");
// Extract method arguments into variables
$rowNumber5 = 8;
$columnLetter5 = "J";
$cellValue5 = "true";
$cellType5 = "Boolean";
$result = SYSTEM::$excelfile->set_cell($excelFilePath, $sheetNumber, $rowNumber5, $columnLetter5, $cellValue5, $cellType5);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 10: Get cell value
echo("\nExample 10: Get cell value J8 Sheet $sheetNumber : ");
$cellValue = SYSTEM::$excelfile->get_cell($excelFilePath, $sheetNumber, $rowNumber5, $columnLetter5);
echo($cellValue . "\n");

// Example 11: Set cell value as TimeSpan ISO 8601
echo("\nExample 11: Set cell value as TimeSpan ISO 8601 J9 Sheet $sheetNumber : ");
// Extract method arguments into variables
$rowNumber6 = 9;
$columnLetter6 = "J";
$cellValue6 = "PT1H30M"; // 'PT1H30M' is 1 hour, 30 minutes. Cell value will be `1:30:00`
$cellType6 = "TimeSpan";
$result = SYSTEM::$excelfile->set_cell($excelFilePath, $sheetNumber, $rowNumber6, $columnLetter6, $cellValue6, $cellType6);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 12: Get cell value
echo("\nExample 12: Get cell value J9 Sheet $sheetNumber : ");
$cellValue = SYSTEM::$excelfile->get_cell($excelFilePath, $sheetNumber, $rowNumber6, $columnLetter6);
echo($cellValue . "\n");

// View the result
WINDOW::$app->shell_execute("open", $excelFilePath);

// Quit
WINDOW::$app->quit();
?>
