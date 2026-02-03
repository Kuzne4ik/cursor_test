<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate opening, copying cells with colors, saving and closing Excel file
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel and prepare file path
$filePath = "test/test.xlsx";
SYSTEM::$excel->kill();

// Example 1: Open the Excel file
echo("Example 1: Open the Excel file : ");
$result = SYSTEM::$excelfile->open($filePath);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Copy cells to second sheet with new colors (commented out for brevity)
/*echo("\nExample 2: Copy cells to second sheet with new colors : ");
for ($i=1;$i<=SYSTEM::$excelfile->get_rows_count($filePath,0);$i++)
{
	for ($j=1;$j<=SYSTEM::$excelfile->get_cols_count($filePath,0);$j++)
	{
		echo SYSTEM::$excelfile->set_cell($filePath,1,$i,$j,SYSTEM::$excelfile->get_cell($filePath,0,$i,$j))." ";
		SYSTEM::$excelfile->set_cell_background_color($filePath,1,$i,$j,"FF0000FF");
		SYSTEM::$excelfile->set_cell_color($filePath,1,$i,$j,"FFFFFF00");
	}
	echo "\n";
}*/

// Example 3: Save the file
echo("\nExample 3: Save the file : ");
$result = SYSTEM::$excelfile->save($filePath);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 4: Close the file
echo("\nExample 4: Close the file : ");
$result = SYSTEM::$excelfile->close($filePath);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// View result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
