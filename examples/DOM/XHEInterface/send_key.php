<?php

// Scenario: Send key event to a DOM element
// Description: For current page, find an input element and send a key event to it
// Classes used: XHEInput, XHEInterface, XHEBrowser, XHEKeyboard, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7013";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Get DOM element <input> by number
$targetInputNumber = 1;
$targetInput = DOM::$input->get_by_number($targetInputNumber);
echo(" \nTarget input inner number: $targetInput->inner_number");

// Check that DOM element was found
if ($targetInput->inner_number != -1) {
    // set focus
    $targetInput->focus();
    
    // Set En keyboard language
    SYSTEM::$keyboard->set_current_language("en");
    
    // Example 1: Send key to input by symbol;
    echo("\n1: Send key 's' to input by symbol: ");
    $sendKeyResult = $targetInput->send_key("s", false);
    if ($sendKeyResult)
		echo("true");
    else
		echo("false");
    
    // Example 2: Send key to input by code
    echo("\n1: Send key 'r' to input by alt code '114': ");
    $sendKeyResult = $targetInput->send_key(114, true);
    if ($sendKeyResult)
		echo("true");
    else
		echo("false");
         
    // Example 3: Send key 'tab' to input by code '9'
    echo("\n3: Send key to the input: ");
    $sendKeyResult = $targetInput->send_key(9, true);
    if ($sendKeyResult)
		echo("true");
    else
		echo("false");
}
echo("\n");

// Stop the application
WINDOW::$app->quit();
?>