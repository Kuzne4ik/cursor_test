<?php
$xhe_host = "127.0.0.1:7025";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate opening and working with Excel file
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Extract method arguments into variables
$filePath = "test/test.xlsx";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Open file
echo("Example 1: Open file : ");
$timeout = 600;
$showExcel = true;
$result = SYSTEM::$excelfile->open($filePath, $timeout, $showExcel);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Output all cells
echo("\nExample 2: Output all cells : ");
// Extract method arguments into variables
$sheetIndex = 0;
for ($k=1;$k<=SYSTEM::$excelfile->get_rows_count($filePath, $sheetIndex);$k++)
{
	for ($j=1;$j<=SYSTEM::$excelfile->get_cols_count($filePath, $sheetIndex);$j++)
		echo SYSTEM::$excelfile->get_cell($filePath, $sheetIndex, $k, $j)."|";
	echo "\n";
}

// Example 3: Copy cells to sheet 2 with new colors
echo("\nExample 3: Copy cells to sheet 2 with new colors: ");
// Extract method arguments into variables
$destSheetIndex = 1;
$bgColor = "FF0000FF";
$fgColor = "FFFFFF00";
for ($k=1;$k<=SYSTEM::$excelfile->get_rows_count($filePath, $sheetIndex);$k++)
{
	for ($j=1;$j<=SYSTEM::$excelfile->get_cols_count($filePath, $sheetIndex);$j++)
	{
		echo SYSTEM::$excelfile->set_cell($filePath, $destSheetIndex, $k, $j, SYSTEM::$excelfile->get_cell($filePath, $sheetIndex, $k, $j))." ";
		SYSTEM::$excelfile->set_cell_background_color($filePath, $destSheetIndex, $k, $j, $bgColor);
		SYSTEM::$excelfile->set_cell_color($filePath, $destSheetIndex, $k, $j, $fgColor);
	}
	echo "\n";
}

// Example 4: Save file
echo("\nExample 4: Save file : ");
$result = SYSTEM::$excelfile->save($filePath);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 5: Close file
echo("\nExample 5: Close file : ");
$result = SYSTEM::$excelfile->close($filePath);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// View the result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
