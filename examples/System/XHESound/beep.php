<?php
// Scenario: Play a system beep sound

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>sound->" . basename (__FILE__) . "</font>\n";

// Example 1: Play a system beep sound
echo("\n\nExample 1. Play a system beep sound: ");
$beepResult = SYSTEM::$sound->beep();

if ($beepResult) {
    echo("true\n");
} else {
    echo("false\n");
}

// Quit the application
WINDOW::$app->quit();
?>