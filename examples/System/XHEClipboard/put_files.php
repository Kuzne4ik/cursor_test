<?php
// Scenario: Put files to clipboard and get them back

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>clipboard->".basename (__FILE__)."</font>\n";

// 1
$testFile1 = "C:\\test1.txt";
$testFile2 = "C:\\test2.txt";
$testFile3 = "C:\\test3.txt";
echo "1. Create array of files for testing: ";
$testFiles = [$testFile1, $testFile2, $testFile3];
echo "Array created: " . implode(", ", $testFiles) . "\n";

// 2
echo "2. Set files to clipboard: ";
echo SYSTEM::$clipboard->put_files($testFiles) . "\n";

// 3
echo "3. Check for files: ";
$hasFiles = SYSTEM::$clipboard->has_files();
if ($hasFiles){
	echo ( "Clipboard has files\n");
}
else {
	echo ( "Clipboard not has files\n");
}

// 4
echo "4. Get files back: ";
$files = SYSTEM::$clipboard->get_files();
if ($files) {
    echo "Files received: " . implode(", ", $files) . "\n";
} else {
    echo "Files not received\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
