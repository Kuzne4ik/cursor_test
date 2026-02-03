<?php
// Scenario: Define a named range in LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >libreOfficeCalc->" . basename (__FILE__) . "</span>\n";

// Example 1
echo "1. Get name of the first sheet: \n";
$filePath = "test/test.ods";
$sheetIndex = 0;
$firstSheetName = SYSTEM::$libreOfficeCalc->get_sheet_name($filePath, $sheetIndex);
echo "First sheet name: $firstSheetName\n";

if (!$firstSheetName)
{
    echo ("Error getting name of the first sheet\n");
    WINDOW::$app->quit();
}

// Example 2
echo "\n\n2. Add range name A10:C10 to sheet '$firstSheetName': \n";

$rangeName = "RangeAC";
$rangeVal = "'" . $firstSheetName . "'.A10:'" . $firstSheetName . "'.C10";
echo "Range value: $rangeVal \n";
// Spaces in the range name will be removed
$res1 = SYSTEM::$libreOfficeCalc->add_define_range_name($filePath, $rangeName, $rangeVal);
$res1 = $res1 ? 'true' : 'false';
echo "Range added: $res1\n";



// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>