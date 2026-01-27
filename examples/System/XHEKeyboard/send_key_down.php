<?php
// Scenario: Demonstrates how to send key down events for various keys including navigation and special keys

$xhe_host = "127.0.0.1:7013";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Navigate to test page with listbox
echo "\n\n";

// Set variables for navigation to test page
$testUrl = TEST_POLYGON_URL . "listbox.html";

// Navigate to the test page
echo "Navigate to test page '$testUrl': ";
$result = WEB::$browser->navigate($testUrl);
if ($result) {
    echo "Navigation successful\n";
} else {
    echo "Failed to navigate\n";
}

echo "\n";

// Example 1: Set focus on listbox and send space key down
$listboxNumber = 4;
$keyCode = VK_SPACE;
echo "1. Set focus on listbox number $listboxNumber and send `space` key down: ";

$result1 = DOM::$listbox->set_focus_by_number($listboxNumber);
$result2 = SYSTEM::$keyboard->send_key_down($keyCode);
if ($result1 && $result2) {
    echo "Focus set and `space` key down sent successfully\n";
} else {
    echo "Failed to set focus or send `space` key down\n";
}

sleep(1);
echo "\n";

// Example 2: Send down arrow key down
$keyCode = VK_DOWN;
echo "2. Send `down arrow` key down: ";

$result = SYSTEM::$keyboard->send_key_down($keyCode);
if ($result) {
    echo "`Down arrow` key down sent successfully\n";
} else {
    echo "Failed to send `down arrow` key down\n";
}

sleep(1);
echo "\n";

// Example 3: Send `down arrow` key down again
echo "3. Send `down arrow` key down again: ";
$result = SYSTEM::$keyboard->send_key_down($keyCode);
if ($result) {
    echo "`Down arrow` key down sent successfully\n";
} else {
    echo "Failed to send `down arrow` key down\n";
}
sleep(1);
echo "\n";

// Example 5: Send `up arrow` key down
$keyCode = VK_UP;
echo "5. Send `up arrow` key down: ";

$result = SYSTEM::$keyboard->send_key_down($keyCode);
if ($result) {
    echo "`Up arrow` key down sent successfully\n";
} else {
    echo "Failed to send `up arrow` key down\n";
}

sleep(1);
echo "\n";

// Example 6: Send `page down` key down
$keyCode = VK_PAGEDOWN;
echo "6. Send `page down` key down: ";

$result = SYSTEM::$keyboard->send_key_down($keyCode);
if ($result) {
    echo "`Page down` key down sent successfully\n";
} else {
    echo "Failed to send `page down` key down\n";
}

sleep(1);
echo "\n";

// Example 7: Send `page up` key down
$keyCode = VK_PAGEUP;
echo "7. Send `page up` key down: ";

$result = SYSTEM::$keyboard->send_key_down($keyCode);
if ($result) {
    echo "`Page up` key down sent successfully\n";
} else {
    echo "Failed to send `page up` key down\n";
}

sleep(1);
echo "\n";

// Example 8: Send `end` key down
$keyCode = VK_END;
echo "8. Send `end` key down: ";

$result = SYSTEM::$keyboard->send_key_down($keyCode);
if ($result) {
    echo "`End` key down sent successfully\n";
} else {
    echo "Failed to send `end` key down\n";
}

sleep(1);
echo "\n";

// Example 9: Send `home` key down
$keyCode = VK_HOME;
echo "9. Send `home` key down: ";

$result = SYSTEM::$keyboard->send_key_down($keyCode);
if ($result) {
    echo "`Home` key down sent successfully\n";
} else {
    echo "Failed to send `home` key down\n";
}

sleep(1);
echo "\n";

// Example 10: Send tab key down
$keyCode = VK_TAB;
echo "10. Send `tab` key down: ";

$result = SYSTEM::$keyboard->send_key_down($keyCode);
if ($result) {
    echo "`Tab` key down sent successfully\n";
} else {
    echo "Failed to send `tab` key down\n";
}

// Set variables for navigation to test page
$testUrl = TEST_POLYGON_URL . "input.html";

// Navigate to the test page
echo "Navigate to test page '$testUrl': ";
$result = WEB::$browser->navigate($testUrl);
if ($result) {
    echo "Navigation successful\n";
} else {
    echo "Failed to navigate\n";
}

echo "\n";

// Example 10: Set focus input and send key 'V' by alt code
$inputNumber = 1;
$keyCode = "86"; // V key
$isAltKey = true;
echo "10. Set focus on input #$inputNumber field and input symbol by alt code '$keyCode': ";

$result1 = DOM::$input->set_focus_by_number($inputNumber);
$result2 = SYSTEM::$keyboard->send_key_down($keyCode, $isAltKey);
if ($result1 && $result2) {
    echo "Focus set and text pasted successfully\n";
} else {
    echo "Failed to set focus or paste text\n";
}

sleep(1);
echo("\n");

// Example 11: Set focus input and send key 'v'
$inputNumber = 1;
$keyCode = "v"; // v key
$isAltKey = false;
echo "11. Set focus on input #$inputNumber field and input symbol '$keyCode': ";

$result1 = DOM::$input->set_focus_by_number($inputNumber);
$result2 = SYSTEM::$keyboard->send_key_down($keyCode, $isAltKey);
if ($result1 && $result2) {
    echo "Focus set and text pasted successfully\n";
} else {
    echo "Failed to set focus or paste text\n";
}


// Quit the application
WINDOW::$app->quit();
?>