<?php
// Scenario: Navigate to a website and set multiple cookies to demonstrate set_cookie function
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the set_cookie function

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;

// Set a simple cookie with name `test_cookie`
$cookie_string = "test_cookie=value123; path=/; domain=.google.com";
$result = WEB::$browser->set_cookie($cookie_string);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set cookie: " . $cookie_string;
} else {
    echo "\n\nFailed to set cookie: " . $cookie_string;
}

// Set a more complex cookie with expiration date
$cookie_string2 = "user_session=abc123def456; expires=Wed, 21 Oct 2025 07:28:00 GMT; path=/; domain=.google.com; secure; HttpOnly";
$result2 = WEB::$browser->set_cookie($cookie_string2);

echo "\n\nSet complex cookie: " . $cookie_string2;
echo "\nResult: " . ($result2 ? "Success" : "Failed");

// Set multiple cookies with names: `theme`, `language`, `user_id`
$cookies = [
    "theme=dark; path=/",
    "language=en; path=/",
    "user_id=789; path=/"
];

foreach ($cookies as $cookie) {
    $result = WEB::$browser->set_cookie($cookie);
    echo "\n\nSet cookie: " . $cookie;
    echo "\nResult: " . ($result ? "Success" : "Failed");
}

// Get all cookies to verify
$all_cookies = WEB::$browser->get_cookie_for_url($url , '', true);
echo "\n\nAll cookies after setting:";
echo "\n" . $all_cookies;

// Остановить работу
WINDOW::$app->quit();
?>