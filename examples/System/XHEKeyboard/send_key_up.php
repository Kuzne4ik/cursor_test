<?php
// Scenario: Demonstrates how to send key up events for various keys including navigation and special keys

$xhe_host = "127.0.0.1:7013";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1: Navigate to test page with listbox
echo "\n\n";

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

// Example 1: Set focus on listbox and send `whitespace` key up
$listboxNumber = 4;
$keyCode = VK_SPACE;

echo "1. Set focus on listbox number $listboxNumber and send `whitespace` key up: ";

$result1 = DOM::$listbox->set_focus_by_number($listboxNumber);
$result2 = SYSTEM::$keyboard->send_key_up($keyCode);
if ($result1 && $result2) {
    echo "Focus set and `whitespace` key up sent successfully\n";
} else {
    echo "Failed to set `whitespace` or send space key up\n";
}
sleep(2);
echo "\n";

// Example 2: Send `down` arrow key up
$keyCode = VK_DOWN;
echo "2. Send `down` arrow key up: ";

$result = SYSTEM::$keyboard->send_key_up($keyCode);
if ($result) {
    echo "`Down` arrow key up sent successfully\n";
} else {
    echo "Failed to send `down` arrow key up\n";
}
sleep(2);
echo "\n";

// Example 3: Send down arrow key up again
echo "3. Send `down` arrow key up again: ";

$result = SYSTEM::$keyboard->send_key_up($keyCode);
if ($result) {
    echo "`Down` arrow key up sent successfully\n";
} else {
    echo "Failed to send `down` arrow key up\n";
}
sleep(2);
echo "\n";

// Example 4: Send `up` arrow key up
$keyCode = VK_UP;
echo "4. Send `up` arrow key up: ";

$result = SYSTEM::$keyboard->send_key_up($keyCode);
if ($result) {
    echo "`Up arrow` key up sent successfully\n";
} else {
    echo "Failed to send `up arrow` key up\n";
}

sleep(2);
echo "\n";

// Example 5: Send `page down` key up
$keyCode = VK_PAGEDOWN;
echo "5. Send `page down` key up: ";

$result = SYSTEM::$keyboard->send_key_up($keyCode);
if ($result) {
    echo "`Page down` key up sent successfully\n";
} else {
    echo "Failed to send `page down` key up\n";
}

sleep(2);
echo "\n";

// Example 6: Send `page up` key up
$keyCode = VK_PAGEUP;
echo "6. Send `page up` key up: ";

$result = SYSTEM::$keyboard->send_key_up($keyCode);
if ($result) {
    echo "`Page up` key up sent successfully\n";
} else {
    echo "Failed to send `page up` key up\n";
}

sleep(2);
echo "\n";


// Example 7: Send `end` key up
$keyCode = VK_END;
echo "7. Send `end` key up: ";

$result = SYSTEM::$keyboard->send_key_up($keyCode);
if ($result) {
    echo "`End` key up sent successfully\n";
} else {
    echo "Failed to send `end` key up\n";
}
sleep(2);
echo "\n";

// Example 8: Send `home` key up
$keyCode = VK_HOME;
echo "8. Send `home` key up: ";

$result = SYSTEM::$keyboard->send_key_up($keyCode);
if ($result) {
    echo "`Home` key up sent successfully\n";
} else {
    echo "Failed to send `home` key up\n";
}

sleep(2);
echo "\n";

// Example 10: Send `tab` key up
$keyCode = VK_TAB;
echo "10. Send `tab` key up: ";

$result = SYSTEM::$keyboard->send_key_up($keyCode);
if ($result) {
    echo "`Tab` key up sent successfully\n";
} else {
    echo "Failed to send `tab` key up\n";
}

// Set variables for navigation to test page
$testUrl = TEST_POLYGON_URL . "input.html";

// Navigate to the test page
echo "Navigate to test page with listbox: ";
$result = WEB::$browser->navigate($testUrl);
if ($result) {
    echo "Navigation successful\n";
} else {
    echo "Failed to navigate\n";
}

sleep(2);
echo "\n";

// Example 11: Set focus on input and input text
$inputNumber = 1;
$text = "teststring";
echo "11. Set focus on input field and input text: ";

$result1 = DOM::$input->set_focus_by_number($inputNumber);
$result2 = SYSTEM::$keyboard->send_input($text);
if ($result1 && $result2) {
    echo "Focus set and text input successful\n";
} else {
    echo "Failed to set focus or input text\n";
}

sleep(2);
echo "\n";

// Example 12: Select text and cut to clipboard

$inputNumber = 1;
$clickX = 10;
$clickY = 10;
echo "12. Select text and cut to clipboard: ";

// click + double Click to sellect
$inputElement = DOM::$input->get_by_number($inputNumber);
$result1 = $inputElement->send_mouse_click($clickX, $clickY);
$result2 = $inputElement->send_mouse_double_click($clickX, $clickY);
if ($result1 && $result2) {
    echo "Text selected successfully\n";
} else {
    echo "Failed to select text\n";
}

// Cut text to clipboard
$keyCode = "88"; // X key
$isAltKey = false;
$isCtrl = true;
echo "Cut text to clipboard (Ctrl+X): ";
$result = SYSTEM::$keyboard->send_key_up($keyCode, $isAltKey, $isCtrl);
if ($result) {
    echo "Text cut successfully\n";
} else {
    echo "Failed to cut text\n";
}

// Get text from clipboard
echo "Get text from clipboard: ";

$clipboardText = SYSTEM::$clipboard->get_text();
if ($clipboardText !== false) {
    echo "Clipboard text: $clipboardText\n";
} else {
    echo "Failed to get clipboard text\n";
}

sleep(2);
echo "\n";

// Example 13: Copy selected text to clipboard
$keyCode = "45"; // Insert key
$isAltKey = false;
$isCtrl = true;

// Get coordinates of element and select it
$elementText = "Пример";
$exactMatch = false;
echo "Get coordinates of element: ";

$x = DOM::$h3->get_x_by_inner_text($elementText, $exactMatch);
$y = DOM::$h3->get_y_by_inner_text($elementText, $exactMatch);
if ($x !== false && $y !== false) {
    echo "Element coordinates: $x x $y\n";
} else {
    echo "Failed to get element coordinates\n";
}

echo "\n";

// Select element by double-clicking
echo "Select element by double-clicking: ";
$result1 = SYSTEM::$mouse->send_click($x, $y);
$result2 = SYSTEM::$mouse->send_double_click($x, $y);
if ($result1 && $result2) {
    echo "Element selected successfully\n";
} else {
    echo "Failed to select element\n";
}

echo "13. Copy selected text to clipboard (Ctrl+Insert): ";

$result = SYSTEM::$keyboard->send_key_up($keyCode, $isAltKey, $isCtrl);
if ($result) {
    echo "Text copied successfully\n";
} else {
    echo "Failed to copy text\n";
}


sleep(2);
echo "\n";

// Example 14: Get copied text from clipboard
echo "14. Get copied text from clipboard: ";
$clipboardText = SYSTEM::$clipboard->get_text(true);
if ($clipboardText !== false) {
    echo "Copied text: $clipboardText\n";
} else {
    echo "Failed to get copied text\n";
}

// Quit the application
WINDOW::$app->quit();
?>