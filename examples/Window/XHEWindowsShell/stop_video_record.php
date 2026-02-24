<?php
// Scenario: Stop recording video of the screen
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Step: Start recording screen video
$filePath1 = "d://record.avi";
$left1 = 10;
$top1 = 70;
$width1 = 100;
$height1 = 100;
echo "Start recording screen video: ";
WEB::$browser->start_video_record($filePath1, $left1, $top1, $width1, $height1, 400, 400);

// Step: Perform some actions
sleep(1);
WEB::$browser->navigate("google.com");
sleep(1);
WEB::$browser->navigate("yandex.com");

// Example 1: Stop recording video
echo "\nStop recording video: ";
$result1 = WEB::$browser->stop_video_record();
echo $result1 . "\n";

// Step: Open the recorded video
WINDOW::$app->shell_execute("", "d:\\record.avi", "", "d:\\", true);

// Step: Start recording black and white screen video
$filePath2 = "d://record_gray.mp4";
$grayscale = true;
$codec = "mp43";
echo "\nStart recording black and white screen video: ";
WINDOW::$windows->start_video_record($filePath2, $left1, $top1, -1, -1, -1, -1, $grayscale, $codec);

// Step: Perform some actions
sleep(1);
WEB::$browser->navigate("google.com");
sleep(1);
WEB::$browser->navigate("yandex.com");

// Example 2: Stop recording video
echo "\nStop recording video: ";
$result2 = WINDOW::$windows->stop_video_record();
echo $result2 . "\n";

// Step: Open the recorded video
WINDOW::$app->shell_execute("", "d:\\record_gray.mp4", "", "d:\\", true);

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>