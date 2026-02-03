<?php
// Scenario: Run a macro by its name in an Excel file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// beginning
echo "\n<span >excelfile->".basename (__FILE__)."</span>\n";

// Example 1: Run macro by name
SYSTEM::$excel->kill();
$filePath = "test/test.xlsm";
$sheetIndex = 0;
$macroName = "MacrosName";

echo("1. Run macro with name '$macroName' in file '$filePath': ");
$result = SYSTEM::$excel->run_macro_by_name($filePath, $sheetIndex, $macroName);
if ($result) {
    echo("Successfully executed macro '$macroName'\n");
} else {
    echo("Failed to execute macro '$macroName'\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

