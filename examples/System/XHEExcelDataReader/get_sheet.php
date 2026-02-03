<?php
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// Scenario: Demonstrate getting entire sheet content as an array

// info
echo "\n<span >excelDataReader->" . basename (__FILE__) . "</span>\n";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get entire sheet 0 as an array
echo("\n\nExample 1: Get entire sheet 0 as an array\n");
$filePath = "test/test.xlsx";
$sheetIndex = 0;
echo("File path: $filePath, Sheet index: $sheetIndex\n");
$datas = SYSTEM::$excelDataReader->get_sheet($filePath, $sheetIndex);

$datasCount = count($datas);
echo("Number of rows in sheet: $datasCount\n\n");

// Display each row with its cell values
for ($k = 0; $k < $datasCount; $k++)
{
    echo("Line #" . ($k + 1) . ": ");
    $row = $datas[$k];
    // Check if the row is countable (array or Countable object) before iterating
    if (is_array($row)) {
        $rowColCount = count($row);
        for ($j = 0; $j < $rowColCount; $j++)
        {
            echo($row[$j] . ", ");
        }
    } else {
        // Handle case where row is a scalar value (string, int, etc.)
        echo($row . ", ");
    }
    echo("\n");
}


// Quit the application
WINDOW::$app->quit();
?>
