<?php
// Scenario: Set value of an input element by its attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for page to load
WEB::$browser->wait_for();

// Example 1: Set value of an input element with id="username_input"
echo "Setting value of input element with id='username_input'...\n";
$result = DOM::$input->set_value_by_attribute("id", "username_input", true, "John Doe");
if ($result) {
    echo "Successfully set value of input element with id='username_input'.\n";
    // Verify value was set
    $value = DOM::$input->get_value_by_attribute("id", "username_input", true);
    echo "Current value: " . $value . "\n";
} else {
    echo "Failed to set value of input element with id='username_input'.\n";
}

// Example 2: Set value of an input element with class="email-input"
echo "\nSetting value of input element with class='email-input'...\n";
$result = DOM::$input->set_value_by_attribute("class", "email-input", true, "user@example.com");
if ($result) {
    echo "Successfully set value of input element with class='email-input'.\n";
    // Verify value was set
    $value = DOM::$input->get_value_by_attribute("class", "email-input", true);
    echo "Current value: " . $value . "\n";
} else {
    echo "Failed to set value of input element with class='email-input'.\n";
}

// Example 3: Set value of an input element with placeholder="Enter your password"
echo "\nSetting value of input element with placeholder='Enter your password'...\n";
$result = DOM::$input->set_value_by_attribute("placeholder", "Enter your password", true, "mypassword123");
if ($result) {
    echo "Successfully set value of input element with placeholder='Enter your password'.\n";
    // Verify value was set
    $value = DOM::$input->get_value_by_attribute("placeholder", "Enter your password", true);
    echo "Current value: " . $value . "\n";
} else {
    echo "Failed to set value of input element with placeholder='Enter your password'.\n";
}

// Example 4: Set value of an input element within a frame (frame=0) with type="search"
echo "\nSetting value of input element with type='search' within frame 0...\n";
$result = DOM::$input->set_value_by_attribute("type", "search", true, "search query", "0");
if ($result) {
    echo "Successfully set value of input element with type='search' within frame 0.\n";
    // Verify value was set
    $value = DOM::$input->get_value_by_attribute("type", "search", true, "0");
    echo "Current value: " . $value . "\n";
} else {
    echo "Failed to set value of input element with type='search' within frame 0.\n";
}

// Quit the application
WINDOW::$app->quit();
?>