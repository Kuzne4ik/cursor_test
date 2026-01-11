<?php
// Scenario: Put different data types to clipboard and get them back

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>clipboard->" . basename (__FILE__) . "</font>\n";

// 1
$formatText = "Text";
$dataToPut = "test data";
echo "1. Set data in Text format: ";
echo SYSTEM::$clipboard->put_data($formatText, $dataToPut) . "\n";

// 2
echo "2. Check for Text format: ";
$hasFormat = SYSTEM::$clipboard->has_format($formatText);
  if ($hasFormat){
	echo ( "Clipboard has text format\n");
}
else {
	echo ( "Clipboard not has text format\n");
}

// 3
echo "3. Get data back: ";
$data = SYSTEM::$clipboard->get_data($formatText);
if ($data) {
    echo "Data received: " . $data . "\n";
} else {
    echo "Data is missing\n";
}

// 4
$formatCustom = "Custom";
$arrayData = ["element1", "element2", "element3"];
echo "4. Set array data in Custom format: ";
echo SYSTEM::$clipboard->put_data($formatCustom, $arrayData) . "\n";

// 5
echo "5. Get array data back: ";
$data = SYSTEM::$clipboard->get_data($formatCustom);
if ($data && is_array($data)) {
    echo "Array received: " . implode(", ", $data) . "\n";
} else {
    echo "Array not received\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
