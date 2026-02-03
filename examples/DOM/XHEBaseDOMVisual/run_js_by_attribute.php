<?php
// Scenario: Examples of using run_js_by_attribute function to execute JavaScript on DOM elements by their attributes
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

echo "\n\n=== Examples of using run_js_by_attribute function ===\n\n";

// Example 1: Execute simple JavaScript on element with specific ID
$attr_name = "id";
$attr_value = "form1_username";
$js_script = "element.tagName;";
$result = DOM::$input->run_js_by_attribute($attr_name, $attr_value, true, $js_script);
 if ($result) {
	echo "\n\nResult of executing JS '{$js_script}' on element with {$attr_name}='{$attr_value}'";
}
else
{
	echo "Could not execut executing JS '{$js_script}' on element with {$attr_name}='{$attr_value}'\n";
}

// Example 2: Execute JavaScript to change element style by name attribute
$attr_name = "name";
$attr_value = "passwd";
$js_script = "element.style.backgroundColor = 'yellow';";
$result = DOM::$input->run_js_by_attribute($attr_name, $attr_value, true, $js_script);
if ($result) {
	echo "\n\nResult of executing JS set style change on element with {$attr_name}='{$attr_value}'";
}
else
{
	echo "Could not executing style change on element with {$attr_name}='{$attr_value}': {$result}\n";
}

// Example 3: Execute JavaScript to get element attributes by form name
$attr_name = "name";
$attr_value = "Form1";
$js_script = "var attrs = element.attributes; var result = ''; for (var i = 0; i < attrs.length; i++) { result += attrs[i].name + '=' + attrs[i].value + '; '; } \nresult;";
$result = DOM::$form->run_js_by_attribute($attr_name, $attr_value, true, $js_script);
if ($result) {
	echo("\n\nExecuting JS to show all attributes of element with {$attr_name}='{$attr_value}': {$result}\n");
}
else
{
	echo "Could not executing get attributes of element with {$attr_name}='{$attr_value}'\n";
}


// Quit the application
WINDOW::$app->quit();
?>