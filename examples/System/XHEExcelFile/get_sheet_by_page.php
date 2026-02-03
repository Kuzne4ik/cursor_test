<?php
$xhe_host = "127.0.0.1:7011";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate paginated reading of Excel sheets
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Read sheet content page by page
echo("Example 1: Get sheet 0 content as array. Paginated traversal\n");

// Extract method arguments into variables
$filePath = __DIR__ . "/test/test.xlsx";
$sheetIndex = 0;

// Number of rows to skip
$skip = 0;
// Number of rows per page
$limit = 2;

// Open file
echo "Open file: ";
echo SYSTEM::$excelfile->open($filePath) . PHP_EOL;

// Determine number of pages
$rowsCount = SYSTEM::$excelfile->get_rows_count($filePath, $sheetIndex);
if ($rowsCount % $limit == 0)
    $pagesCount = $rowsCount/$limit;
else
    $pagesCount = (int)($rowsCount/$limit) + 1;
echo "Variables for operation: " . PHP_EOL;
echo "[Rows count][Rows to skip][Rows per page][Pages count]:  [$rowsCount][$skip][$limit][$pagesCount]" . PHP_EOL;

echo 'Reading page by page: ' . PHP_EOL;
for($page = 1; $page <= $pagesCount; $page++){
    echo 'Page #[' . $page . '] ' ;
    if ($page == 1){
        $currentRows = SYSTEM::$excelfile->get_sheet_by_page($filePath, $sheetIndex, $skip,  $limit);
    }
    else {
        $skip = ($page  - 1) * $limit;
        $currentRows = SYSTEM::$excelfile->get_sheet_by_page($filePath, $sheetIndex, $skip,  $limit);
    }

    if (!$currentRows)
        break;

    echo 'Rows count on page: ' .  count($currentRows) . PHP_EOL;

    echo 'Rows: '  . PHP_EOL;
    $logStr = '';
    foreach($currentRows as $row){
        $valCount = count($row);
        $logStr = '';
        for ($k = 0; $k < $valCount; $k++){
            if (empty($row[$k]))
                $logStr = $logStr . ', ' . "''";
            else
                $logStr = $logStr . ', ' . $row[$k];
        }
        // Remove comma at the beginning
        $logStr = trim($logStr, ',');
        echo '[' . $logStr . ']' . PHP_EOL;
    }
}

echo 'Close file: ';
SYSTEM::$excelfile->close($filePath);

// View the result


// End of script
echo "\n";

// Quit
WINDOW::$app->quit();
?>
