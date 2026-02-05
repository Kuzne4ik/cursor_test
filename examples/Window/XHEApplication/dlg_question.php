<?php
// Scenario: Show question dialog
$xhe_host = "127.0.0.1:7010";
if (!isset($path)) {
   // Path to the init.php file for connecting to the XHE API
   $path = "../../../Templates/init.php";
   // Including init.php grants access to all classes and functionality for working with the XHE API
   require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename(__FILE__) . "</font>\n";

$PHP_Use_Trought_Shell = false;

// Example 1
echo "1. Ask question 2+2=5\n";
$questionText = "2+2=5 ?";
$answer = WINDOW::$app->dlg_question($questionText);
if ($answer == "Yes")
   echo "yes";
else
   echo "no";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
