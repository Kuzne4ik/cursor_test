<?php
// Scenario: Optimize memory usage and monitor effectiveness
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Step: Get initial resources
$beginMem = WINDOW::$debug->get_cur_mem_size();
$gdiCount = WINDOW::$debug->get_gui_resources(0);
$userCount = WINDOW::$debug->get_gui_resources(1);

// Step: Check memory optimization effectiveness
$iterations = 5;
for ($k = 0; $k < $iterations; $k++) {
    // Step: Create additional browser instance
    WEB::$browser->set_count(2);
    WEB::$browser->set_active_browser(1);

    // Example 1: Allocate memory
    echo "\n\nExample 1: Allocate memory\n";
    for ($j = 0; $j < 2; $j++) {
        $curMem = WINDOW::$debug->get_cur_mem_size();
        echo "Current memory: $curMem ";
        
        WEB::$browser->navigate("vk.com");
        echo "Navigated to vk.com ";
        
        WEB::$browser->navigate("yandex.ru");
        echo "Navigated to yandex.ru ";
        
        WEB::$browser->navigate("google.com");
        echo "Navigated to google.com ";
        
        WEB::$browser->navigate("yahoo.com");
        echo "Navigated to yahoo.com\n";
    }
    
    // Example 2: Optimize memory
    echo "\nExample 2: Optimize memory\n";
    $result = WINDOW::$debug->optimize_memory();
    if ($result)
        echo "Memory optimized successfully ";
    else
        echo "Failed to optimize memory ";
        
    WEB::$browser->recreate();
    $memAfter = WINDOW::$debug->get_cur_mem_size();
    echo "Memory after optimization: $memAfter\n";
    
    // Example 3: Display memory usage
    echo "\nExample 3: Display memory usage\n";
    WEB::$browser->navigate("about:blank");
    WEB::$browser->navigate("ya.ru");
    WEB::$browser->navigate("yahoo.com");
    $memUsage = WINDOW::$debug->get_cur_mem_size();
    echo "Memory usage: $memUsage\n";
    
    // Example 4: Display memory usage after recreation
    echo "\nExample 4: Display memory usage after recreation\n";
    WEB::$browser->recreate();
    WEB::$browser->navigate("about:blank");
    WEB::$browser->navigate("ya.ru");
    WEB::$browser->navigate("yahoo.com");
    $memUsageAfter = WINDOW::$debug->get_cur_mem_size();
    echo "Memory usage after recreation: $memUsageAfter\n\n";

    // Step: Clean up browser instance
    WEB::$browser->recreate();
    WEB::$browser->set_count(1);
}

// Step: Display memory usage statistics
$endMem = WINDOW::$debug->get_cur_mem_size();
$deltaMem = ($endMem - $beginMem) / 1024 / 1024;
$endMemMB = $endMem / 1024 / 1024;
echo "Memory used: $endMemMB MB\n";

if ($deltaMem < 0)
    echo "Delta memory size: $deltaMem MB (memory freed)\n";
else
    echo "Delta memory size: $deltaMem MB (memory increased)\n";

// Step: Display GUI resource statistics
$gdiEnd = WINDOW::$debug->get_gui_resources(0);
$userEnd = WINDOW::$debug->get_gui_resources(1);
$deltaGDI = ($gdiEnd - $gdiCount);
$deltaUser = ($userEnd - $userCount);
echo "GDI delta: $deltaGDI, USER delta: $deltaUser\n";

// Quit the application
WINDOW::$app->quit();
?>