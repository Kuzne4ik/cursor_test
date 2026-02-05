<?php
// Scenario: Minimize application to tray on start
$xhe_host = "127.0.0.1:7010";
if (!isset($path)) {
	// Path to the init.php file for connecting to the XHE API
	$path = "../../../Templates/init.php";
	// Including init.php grants access to all classes and functionality for working with the XHE API
	require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename(__FILE__) . "</font>\n";

// depending on state
if (count($argv) == 1) {
	// Example 1
	echo "1. Minimize to tray on start\n";
	$enable = true;
	$minimizeResult = WINDOW::$app->minimize_to_tray_by_start($enable);
	if ($minimizeResult)
		echo "Minimize to tray on start enabled successfully\n";
	else
		echo "Failed to enable minimize to tray on start\n";
	sleep(1);

	// 2
	echo "2. Restart\n";
	$script = __FILE__;
	$arguments = "2 2";
	$port = "7011"; // another port for App after restart executed
	$restartResult = WINDOW::$app->restart($script, $arguments, $port);
	if ($restartResult)
		echo "Restart initiated successfully\n";
	else
		echo "Failed to initiate restart\n";
} else {
	// Example 3
	echo "1. Do not minimize to tray on start\n";
	$enable = false;
	$minimizeResult = WINDOW::$app->minimize_to_tray_by_start($enable);
	if ($minimizeResult)
		echo "Minimize to tray on start disabled successfully\n";
	else
		echo "Failed to disable minimize to tray on start\n";
}

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
