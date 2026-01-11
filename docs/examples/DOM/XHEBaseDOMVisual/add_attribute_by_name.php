<?php
// Scenario: Add attribute to anchor element by name, check attributes, handle non-existent elements and frames.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>anchor->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Navigate to test page: ";
echo WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html") . "\n";
WEB::$browser->wait_js();

// 2 
echo "2. Get all attributes of element with name 'mouseover1': \n";
echo DOM::$anchor->get_all_attributes_by_name("mouseover1") . "\n";

// 3 
echo "3. Add attribute 'label1' = 'value1' to element with name 'mouseover1' : ";
echo DOM::$anchor->set_attribute_by_name("mouseover1","label1","value1") . "\n";

// 4 
echo "4. Get all attributes of element with name 'mouseover1': \n";
echo DOM::$anchor->get_all_attributes_by_name("mouseover1") . "\n";

// 5
echo" 5. Get all attributes of element with name 'f0_mouseover1' in frame 0: \n";
echo DOM::$anchor->get_all_attributes_by_name("f0_mouseover1",0) . "\n";

// 6 
echo "6. Add attribute 'label2' = 'value1' to element with name 'f0_mouseover1' in frame 0: ";
echo DOM::$anchor->set_attribute_by_name("f0_mouseover1","label2","value1",0) . "\n";

// 7 
echo "7. Get all attributes of element with name 'f0_mouseover1' in frame 0: \n";
echo DOM::$anchor->get_all_attributes_by_name("f0_mouseover1",0) . "\n";

// Quit the application
WINDOW::$app->quit();
?>