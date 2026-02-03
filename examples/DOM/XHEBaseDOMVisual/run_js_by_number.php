<?php
// Scenario: Examples of using run_js_by_number function to execute JavaScript on DOM elements by their number
// Path to init.php file for connecting to XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

echo "\n\n=== Examples of using run_js_by_number function ===\n\n";

// Example 1: Get all input elements and execute simple JavaScript on the first element
$element_number = 0; // First input element
$js_script = "element.tagName;";
$result = DOM::$input->run_js_by_number($element_number, $js_script);
echo "\n\nResult of executing '{$js_script}' on input element #{$element_number}: {$result}";


// Example 2: Execute JavaScript to change input element style
$element_number = 1; // Second input element
$js_script = "element.style.backgroundColor = 'yellow'; 'Background color changed to yellow';";
$result = DOM::$input->run_js_by_number($element_number, $js_script);
echo "\n\nResult of executing style change on input element #{$element_number}: {$result}";


// Example 3: Execute JavaScript to get input element attributes
$element_number = 2; // Third input element
$js_script = "var attrs = element.attributes; var result = ''; for (var i = 0; i < attrs.length; i++) { result += attrs[i].name + '=' + attrs[i].value + '; '; } \nresult;";
$result = DOM::$input->run_js_by_number($element_number, $js_script);
echo "\n\nAttributes of input element #{$element_number}: {$result}";


// Example 4: Execute JavaScript to check input element visibility
$element_number = 3; // Fourth input element
$js_script = "var rect = element.getBoundingClientRect(); \n (rect.width > 0 && rect.height > 0) ? 'Visible' : 'Not visible';";
$result = DOM::$input->run_js_by_number($element_number, $js_script);
echo "\n\nVisibility status of input element #{$element_number}: {$result}";

// Example 5: Execute JavaScript to get input element position
$element_number = 4; // Fifth input element
$js_script = "var rect = element.getBoundingClientRect(); 'X: ' + rect.left + ', Y: ' + rect.top + ', Width: ' + rect.width + ', Height: ' + rect.height;";
$result = DOM::$input->run_js_by_number($element_number, $js_script);
echo "\n\nPosition of input element #{$element_number}: {$result}";


// Quit the application
WINDOW::$app->quit();
?>