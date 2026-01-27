<?php
// Scenario: Demonstrates how to send various key commands and clipboard operations

$xhe_host = "127.0.0.1:7013";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Set variables for navigation to test page
$testUrl = TEST_POLYGON_URL . "listbox.html";

// Navigate to the test page
echo "Navigate to test page with listbox: ";
$result = WEB::$browser->navigate($testUrl);
if ($result) {
    echo "Navigation successful\n";
} else {
    echo "Failed to navigate\n";
}

// Example 1: Set focus on listbox and send space key
$listboxNumber = 4;
$keyCode = VK_SPACE;
$isAltKey = true;
echo "1. Set focus on listbox #$listboxNumber and send space key: ";

$result1 = DOM::$listbox->set_focus_by_number($listboxNumber);
$result2 = SYSTEM::$keyboard->send_key($keyCode, $isAltKey);
if ($result1 && $result2) {
    echo "Focus set and space key sent successfully\n";
} else {
    echo "Failed to set focus or send space key\n";
}
sleep(1);
echo("\n");

// Example 2: Send down arrow key
$keyCode = VK_DOWN;
$isAltKey = true;
echo "2. Send down arrow key on listbox #$listboxNumber: ";

$result = SYSTEM::$keyboard->send_key($keyCode, $isAltKey);
if ($result) {
    echo "Down arrow key sent successfully\n";
} else {
    echo "Failed to send down arrow key\n";
}
sleep(1);
echo("\n");

// Example 3: Send down arrow key again
echo "3. Send down arrow key again on listbox #$listboxNumber: ";
$result = SYSTEM::$keyboard->send_key($keyCode, $isAltKey);
if ($result) {
    echo "Down arrow key sent successfully\n";
} else {
    echo "Failed to send down arrow key\n";
}
sleep(1);
echo("\n");

// Example 4: Send up arrow key
$keyCode = VK_UP;
$isAltKey = true;
echo "4. Send up arrow key on listbox #$listboxNumber: ";

$result = SYSTEM::$keyboard->send_key($keyCode, $isAltKey);
if ($result) {
    echo "Up arrow key sent successfully\n";
} else {
    echo "Failed to send up arrow key\n";
}
sleep(1);
echo("\n");

// Example 5: Send page down key
echo "\n";

// Send page down key
$keyCode = VK_PAGEDOWN;
$isAltKey = true;
echo "5. Send page down key on listbox #$listboxNumber: ";

$result = SYSTEM::$keyboard->send_key($keyCode, $isAltKey);
if ($result) {
    echo "Page down key sent successfully\n";
} else {
    echo "Failed to send page down key\n";
}
sleep(1);
echo("\n");

// Example 6: Send page up key
$keyCode = VK_PAGEUP;
$isAltKey = true;
echo "6. Send page up key on listbox #$listboxNumber: ";

$result = SYSTEM::$keyboard->send_key($keyCode, $isAltKey);
if ($result) {
    echo "Page up key sent successfully\n";
} else {
    echo "Failed to send page up key\n";
}
sleep(1);
echo("\n");

// Example 7: Send end key
$keyCode = VK_END;
$isAltKey = true;
echo "7. Send end key on listbox #$listboxNumber: ";

$result = SYSTEM::$keyboard->send_key($keyCode, $isAltKey);
if ($result) {
    echo "End key sent successfully\n";
} else {
    echo "Failed to send end key\n";
}
sleep(1);
echo("\n");

// Example 8: Send home key
$keyCode = VK_HOME;
$isAltKey = true;
echo "8. Send home key on listbox #$listboxNumber: ";

$result = SYSTEM::$keyboard->send_key($keyCode, $isAltKey);
if ($result) {
    echo "Home key sent successfully\n";
} else {
    echo "Failed to send home key\n";
}
sleep(1);
echo "\n";

// Example 9: Send tab key
$keyCode = VK_TAB;
$isAltKey = true;
echo "9. Send tab key on listbox #$listboxNumber: ";

$result = SYSTEM::$keyboard->send_key($keyCode, $isAltKey);
if ($result) {
    echo "Tab key sent successfully\n";
} else {
    echo "Failed to send tab key\n";
}

// Navigate to input to test page
echo "\n\n";

// Navigate to the test page
$testUrl = TEST_POLYGON_URL . "input.html";
echo "Navigate to test page with '$testUrl': ";
$result = WEB::$browser->navigate($testUrl);
if ($result) {
    echo "Navigation successful\n";
} else {
    echo "Failed to navigate\n";
}

// Set focus on search input and input text
echo "\n";

// Set focus on search input and input text
$inputNumber = 1;
$text = "1teststring";
echo "Set focus on input #$inputNumber field and input text: ";

$result1 = DOM::$input->set_focus_by_number($inputNumber);
$result2 = SYSTEM::$keyboard->send_input($text);
if ($result1 && $result2) {
    echo "Focus set and text input successful\n";
} else {
    echo "Failed to set focus or input text\n";
}

sleep(1);
echo("\n");

// Example 10: Select text and cut to clipboard
$inputNumber = 1;
$clickX = 10;
$clickY = 10;
echo "Select text by double-clicking in input #$inputNumber: ";

$inputElement = DOM::$input->get_by_number($inputNumber);
$result1 = $inputElement->send_mouse_click($clickX, $clickY);
$result2 = $inputElement->send_mouse_double_click($clickX, $clickY);
if ($result1 && $result2) {
    echo "Text selected successfully\n";
} else {
    echo "Failed to select text\n";
}

sleep(1);
echo("\n");

// Cut text to clipboard
$keyCode = "X"; 
$isAltKey = false; // use key value
$isCtrl = true;
echo "10. Cut text to clipboard (Ctrl+X): ";

$result = SYSTEM::$keyboard->send_key($keyCode, $isAltKey, $isCtrl);
if ($result) {
    echo "Text cut successfully\n";
} else {
    echo "Failed to cut text\n";
}

// Get text from clipboard
echo "\n";

// Get text from clipboard
echo "Get text from clipboard: ";
$clipboardText = SYSTEM::$clipboard->get_text();
if ($clipboardText !== false) {
    echo "Clipboard text value (must be '$text'): $clipboardText\n";
} else {
    echo "Failed to get clipboard text\n";
}

sleep(1);
echo("\n");

// Get coordinates of element and select it
$elementText = "Пример";
$exactMatch = false;
echo "Get coordinates of element `h3`: ";

$x = DOM::$h3->get_x_by_inner_text($elementText, $exactMatch);
$y = DOM::$h3->get_y_by_inner_text($elementText, $exactMatch);
if ($x !== false && $y !== false) {
    echo "Element coordinates: $x x $y\n";
} else {
    echo "Failed to get element coordinates\n";
}

sleep(1);
echo("\n");

// Example 11: Copy selected text to clipboard
echo "Select element by double-clicking: ";
$result1 = SYSTEM::$mouse->send_click($x, $y);
$result2 = SYSTEM::$mouse->send_double_click($x, $y);
if ($result1 && $result2) {
    echo "Element selected successfully\n";
} else {
    echo "Failed to select element\n";
}

// Copy selected text to clipboard
$keyCode = "45"; // Insert key
$isAltKey = true;
$isCtrl = true;
echo "11. Copy selected text to clipboard (Ctrl+Insert): ";

$result = SYSTEM::$keyboard->send_key($keyCode, $isAltKey, $isCtrl);
if ($result) {
    echo "Text copied successfully\n";
} else {
    echo "Failed to copy text\n";
}

// Get copied text from clipboard
echo "Get copied text from clipboard: ";
$clipboardText = SYSTEM::$clipboard->get_text();
if ($clipboardText !== false) {
    echo "Copied text: $clipboardText\n";
} else {
    echo "Failed to get copied text\n";
}

sleep(1);
echo("\n");

// Example 12: Set focus on input and paste from clipboard by alt key
$inputNumber = 1;
$keyCode = "86"; // V key
$isAltKey = true; // use key code
$isCtrl = true;
echo "12. Set focus on input field #$inputNumber and paste from clipboard (Ctrl+V): ";

$result1 = DOM::$input->set_focus_by_number($inputNumber);
$result2 = SYSTEM::$keyboard->send_key($keyCode, $isAltKey, $isCtrl);
if ($result1 && $result2) {
    echo "Focus set and text pasted successfully\n";
} else {
    echo "Failed to set focus or paste text\n";
}

// Get input value for control
$targetInputVal = DOM::$input->get_value_by_number($inputNumber);
if ($targetInputVal){
    echo("Value of input #$inputNumber (must be '$clipboardText'): $targetInputVal\n");
}

sleep(1);
echo("\n");

// Example 13: Set focus on input and paste from clipboard
$inputNumber = 2;
$keyCode = "v"; // v key lowercase
$isAltKey = false; // use key code
$isCtrl = true;
echo "13. Set focus on input field #$inputNumber and paste from clipboard (Ctrl+V): ";

$result1 = DOM::$input->set_focus_by_number($inputNumber);
$result2 = SYSTEM::$keyboard->send_key($keyCode, $isAltKey, $isCtrl);
if ($result1 && $result2) {
    echo "Focus set and text pasted successfully\n";
} else {
    echo "Failed to set focus or paste text\n";
}

// Get input value for control
$targetInputVal = DOM::$input->get_value_by_number($inputNumber);
if ($targetInputVal){
    echo("Value of input #$inputNumber (must be '$clipboardText'): $targetInputVal\n");
}

sleep(1);
echo("\n");

// Example 14: Set focus on input send one lowercase symbol
$inputNumber = 3;
$keyCode = "v"; // v key lowercase
$isAltKey = false; // use key code
$isCtrl = false;
echo "14. Set focus on input field #$inputNumber and send one lowercase symbol '$keyCode': ";

$result1 = DOM::$input->set_focus_by_number($inputNumber);
$result2 = SYSTEM::$keyboard->send_key($keyCode, $isAltKey, $isCtrl);
if ($result1 && $result2) {
    echo "Focus set and text pasted successfully\n";
} else {
    echo "Failed to set focus or paste text\n";
}

sleep(1);
echo("\n");

// Example 15: Set focus on input send one uppercase symbol
$inputNumber = 3;
$keyCode = "V"; // V key uppercase
$isAltKey = false; // use key code
$isCtrl = false;

echo "15. Set focus on input field #$inputNumber and send one uppercase symbol '$keyCode': ";

$result1 = DOM::$input->set_focus_by_number($inputNumber);
$result2 = SYSTEM::$keyboard->send_key($keyCode, $isAltKey, $isCtrl);
if ($result1 && $result2) {
    echo "Focus set and text pasted successfully\n";
} else {
    echo "Failed to set focus or paste text\n";
}

sleep(1);
echo("\n");

// Example 16: Set focus on input send one symbol by Alt code
$inputNumber = 3;
$keyCode = "86"; // V key
$isAltKey = true; // use key code
$isCtrl = false;
echo "16. Set focus on input field #$inputNumber and send one symbol by Alt code '$keyCode': ";

$result1 = DOM::$input->set_focus_by_number($inputNumber);
$result2 = SYSTEM::$keyboard->send_key($keyCode, $isAltKey, $isCtrl);
if ($result1 && $result2) {
    echo "Focus set and text pasted successfully\n";
} else {
    echo "Failed to set focus or paste text\n";
}

sleep(1);
echo("\n");

// Example 17: Set focus on input send Ctr+V by Alt code
$inputNumber = 3;
$keyCode = "86"; // V key
$isAltKey = true; // use key code
$isCtrl = true; // Ctrl key is press
echo "17. Set focus on input #$inputNumber send Ctr+V by Alt code '$keyCode': ";

$result1 = DOM::$input->set_focus_by_number($inputNumber);
$result2 = SYSTEM::$keyboard->send_key($keyCode, $isAltKey, $isCtrl);
if ($result1 && $result2) {
    echo "Focus set and text pasted successfully\n";
} else {
    echo "Failed to set focus or paste text\n";
}

// Get input value for control
$targetInputVal2 = DOM::$input->get_value_by_number($inputNumber);
if ($targetInputVal2){
    echo("Value of input #$inputNumber (must be 'vVV$targetInputVal'): $targetInputVal2\n");
}

// Quit the application
WINDOW::$app->quit();
?>