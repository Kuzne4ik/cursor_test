<?php
// Scenario: Put HTML to clipboard and paste it to online HTML editor

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}
 
// beginning
echo "\n<span >clipboard->".basename (__FILE__)."</span>\n";

// 1
$htmlLink = "<a href='" . TEST_POLYGON_URL . "textarea.html". "'>seo</a>";
echo "1. Put html to clipboard: ";
echo SYSTEM::$clipboard->put_html($htmlLink) . "\n";
 
// 2
$editorUrl = TEST_POLYGON_URL . "textarea.html";
echo "2. Go to html editor: ";
echo WEB::$browser->navigate($editorUrl) . "\n";

// 3
$frameId = "elm1_ifr";
echo "3. Set focus to textarea 0: ";
echo DOM::$textarea->get_by_number(0)->focus() . "\n";

// 4
echo "4. Paste html from clipboard: ";
echo WEB::$browser->paste() . "\n";

sleep(1);

echo "5. Put html to clipboard: ";
echo SYSTEM::$clipboard->put_html($htmlLink) . "\n";

// 6
echo "6. Set focus to textarea 0 in frame 0: ";
echo DOM::$textarea->get_by_number(0, 0)->focus() . "\n";

// 7
echo "7. Paste html from clipboard by browser paste directly: ";
echo WEB::$browser->paste($htmlLink) . "\n";

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>