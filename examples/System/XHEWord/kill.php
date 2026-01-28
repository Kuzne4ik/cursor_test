<?php 
// Scenario: Kill all a Word app processes
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>word->" . basename (__FILE__) . "</font>\n";

// Open focx file in Word app
//$path = "test\\test_create.docx";
//$app->shell_execute("open",$path);
//sleep(5);

// Example 1: Kill any existing Word app processes
$result = SYSTEM::$word->kill();
if ($result) {
    echo("Successfully kill Word app process\n");
} else {
    echo("Failed to kill Word app process\n");
}
echo "\n";
// Quit
$app->quit();
?>