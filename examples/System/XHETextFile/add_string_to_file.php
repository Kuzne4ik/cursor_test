<?php 

// Scenario: Add multiple strings to a text file and display the result
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >textfile->" . basename (__FILE__) . "</span>\n";


// Example 1: Add strings to file
// Set file path
$filePath = "test/add_string.txt";
//$filePath = "D:/add_string.txt";
// Set timeout
$timeout = 60;

echo("1. Add strings to file : \n\n");
for ($k=0;$k<10;$k++)
{
	// Set string to add
	$stringToAdd = "string_ №".$k."\r\n";
	
	// Add string to file
	$result = SYSTEM::$textfile->add_string_to_file($filePath, $stringToAdd, $timeout);
	
	// Check result and echo appropriate message
	if ($result) {
		echo ("Added string: string №".$k." : true\n");
	} else {
		echo ("Added string: string №".$k." : false\n");
	}
}


// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>